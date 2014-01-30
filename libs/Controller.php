<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 20:17
 */
class Controller{
    function __construct(){
        //echo (controller principal)
        $this->view = new View();

    }

    public function loadModel($model){
        require 'models/'.$model.'.php';

        $model = $model.'Model';
        $this->model = new $model();
    }
}