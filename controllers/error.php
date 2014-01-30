<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 20:12
 */
class Error extends Controller{

    function __construct(){
        parent::__construct();
    }
    function index(){

        $this->view->msg = 'Pagina nu exista.<br/>';
        $this->view->render('error/index');
    }
}