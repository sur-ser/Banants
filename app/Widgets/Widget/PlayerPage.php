<?php
/**
 * User: Arsen
 * Date: 03.10.14
 * Time: 0:52
 * Класс страницы
 * Употребляется в виде для отабражения элементов страницы
 * по средствам его методов
 */

namespace Widgets\Widget;
restrictAccess();


use Widgets\AbstractWidget;
use View;
use EventModel;
use PlayerModel;
use Router;
use Football\Events\EventManager;
use Football\Player;


class PlayerPage extends AbstractWidget{

    /**
     * Тип страницы
     */
    protected $_type;

    /**
     * Позиция
     */
    protected $_position;

    /**
     * Индекс сортировки
     */
    protected $_sort;

    /**
     * Шаблон
     */
    protected $_template;

    /**
     * Параметри в виде JSON-а
     */
    protected $_param;

    /**
     * Загаловок
     * @var
     */
    protected $_title;

    /**
     * Собития
     * @type EventManager
     */
    protected $_data;


    public function getPosition()
    {
        return $this->_position;
    }

    public function getSorting()
    {
        return $this->_sort;
    }

    public function render()
    {
        return View::make($this->_template)
            ->with('data', $this->_data);
    }

    public function init($model)
    {
        $param = Router::getCurrentRoute()->getActionVariable('param');

        $item = PlayerModel::whereSlug($param)->first();

        $this->_data = new Player;
        $this->_data->init($item);

        $this->_position = $model->position;
        $this->_sort = $model->sort;
        $this->_template = $model->template;
        $this->_param = $model->param;
        $this->_type = $model->type;
    }
}