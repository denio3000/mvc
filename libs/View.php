<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 20:21
 */
class View{
    function __construct()
    {
        // echo (view principal);
    }
    public function render($name, $noFrontend=false)
    {

        if($noFrontend == true){
            require 'views/'.$name.'.php';
        }else{
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }
}