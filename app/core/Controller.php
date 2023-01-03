<?php

/*namespace app\core;*/

class Controller 
{
    public function model($model)
    {
        require_once realpath(dirname(__DIR__,1) .'/models/'.$model.'.php');
        return new $model();
    }

    public static function view($view, $data = [])
    {
        require_once realpath(dirname(__DIR__,1) .'/views/'.$view.'.php');
    }
}