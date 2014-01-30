<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 19:31
 */

class Index extends Controller{

    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render('index/index');
    }
}