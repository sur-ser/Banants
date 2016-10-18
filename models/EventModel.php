<?php
restrictAccess();

/**
 * Created by PhpStorm.
 * User: Arsen
 * Date: 11/27/2015
 * Time: 12:06 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class EventModel extends Eloquent
{
    public $timestamps = true;

    protected $table = 'events';

    protected $fillable = ['tournament_id', 'home_id', 'away_id', 'slug', 'winner', 'status', 'round', 'played_at', 'started_at', 'ended_at'];


    public function tournament()
    {
        return $this->belongsTo('TournamentModel', 'tournament_id')->first();
    }

    public function homeTeam()
    {
        return $this->home()->team()->first();
    }

    public function awayTeam()
    {
        return $this->away()->team()->first();
    }

    /**
     * Статистика Домашней команди
     * @return mixed
     */
    public function home()
    {
        return $this->homeModel()->first();
    }

    /**
     * Статистика Гостевой команди
     * @return mixed
     */
    public function away()
    {
        return $this->awayModel()->first();
    }

    /**
     * Модел Статистики Домашней команди
     * @return mixed
     */
    public function homeModel()
    {
        return $this->belongsTo('EventTeamStatisticModel', 'home_id');
    }

    /**
     * Модел Статистики Гостевой команди
     * @return mixed
     */
    public function awayModel()
    {
        return $this->belongsTo('EventTeamStatisticModel', 'away_id');
    }

//    public function homeStatistic()
//    {
//        return $this->hasOne('EventTeamStatisticModel', 'event_id')->first();
//    }
//
//    public function awayStatistic()
//    {
//        return $this->hasOne('EventTeamStatisticModel', 'event_id')->first();
//    }

    // this is a recommended way to declare event handlers
    protected static function boot() {
        parent::boot();

        static::creating(function($model) { // before create() method call this
            $slug = $model->home()->team()->text() . '_' . $model->away()->team()->text(); // todo:: add slugable CLASS by DateTime
            $model->update(['slug' => $slug]);

//            $model->contents()->detach($model->id);
            // do the rest of the cleanup...
        });
    }
}