<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 30/01/14
 * Time: 01:28
 */

class Dashboard extends Controller{

    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }
    function index(){
        $this->view->render('dashboard/index');
    }
    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;

    }
}