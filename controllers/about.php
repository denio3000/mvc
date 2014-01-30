<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 19:32
 */
class About extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index () {
        $this->view->render('about/index');
    }

    public function varsta() {
        $this->view->varsta= 'Varsta mea e de 26 ani.';
        $this->view->render('about/varsta');
    }

    public function studii($variabila=null) {

        $model = new AboutModel();
        $this->view->studii = $model->getStudii();

        if ($variabila=='liceu') {
            echo 'Liceu: Alexandru Marghiloman<br/>';
        }

        $this->view->render('about/studii');
    }
}