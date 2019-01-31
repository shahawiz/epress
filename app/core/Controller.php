<?php
class Controller
{
    //Loading Model
    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model();
    }
    //Loading View
    public function view($view,$data = [])
    {
        require_once '../app/views/'.$view.'.php';
    }
}