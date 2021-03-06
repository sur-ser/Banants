<?php
restrictAccess();

/**
 * Created by PhpStorm.
 * User: Arsen
 * Date: 11/27/2015
 * Time: 12:06 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class TeamModel extends Eloquent
{
    public $timestamps = false;

    protected $table = 'teams';

    protected $fillable = ['entity_id', 'photo_id',  'banner_id', 'short_name_id', 'status', 'slug', 'is_own', 'formation_id', 'league_id'];


    public function article()
    {
        return $this->belongsTo('ArticleModel', 'article_id')->first();
    }

    public function players()
    {
        return $this->hasMany('PlayerModel', 'team_id');
    }

    /**
     * Загрузка картинки по-умолчанию
     */
    public function defaultImage()
    {
        return $this->belongsTo('PhotoModel', 'photo_id')->first();
    }

    public function defaultBanner()
    {
        return $this->belongsTo('PhotoModel', 'banner_id')->first();
    }

    public function formation()
    {
        return $this->belongsTo('FormationModel', 'formation_id')->first();
    }

    public function league()
    {
        return $this->belongsTo('LeagueModel', 'league_id')->first();
    }

    public function tournaments()
    {
        return $this->belongsToMany('TournamentModel', 'teams_has_tournaments', 'team_id', 'tournament_id')->withPivot('pos', 'points', 'win', 'draw', 'lose', 'goals_for', 'goals_against', 'difference');
    }

    public function tournamentsTable()
    {
        return $this->hasMany('TeamHasTournamentModel', 'team_id');
    }

    public function text()
    {
        return $this->belongsTo('EntityModel', 'entity_id')->first()->text;
    }

    public function shortName()
    {
        $name = $this->firstShortNameModel();

        return ($name) ? $name->text : null;
    }

    public function shortNameModel()
    {
        return $this->belongsTo('EntityModel', 'short_name_id');
    }

    public function firstShortNameModel()
    {
        return $this->shortNameModel()->first();
    }

    public function entity()
    {
        return $this->belongsTo('EntityModel', 'entity_id');
    }

    public function hasBanner()
    {
        return (bool) ($this->defaultBanner()->id !== 1);
    }

    public function getPage()
    {
        return 'team/' . $this->defaultBanner()->id;
    }
}