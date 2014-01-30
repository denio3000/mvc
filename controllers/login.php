<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 19:31
 */

class Login extends Controller{

    function __construct(){
       parent::__construct();
    }
    function index(){

        $this->view->render('login/index');
    }
    function run(){
        $this->model->run();
    }
}