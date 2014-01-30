<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 19:41
 */

class Bootstrap{

    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //
   //print_r( $url);

        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->Index();
            return false; //stop aici.
        }
        $address= 'controllers/'.$url[0].'.php';

        if(file_exists($address)){
            require $address;
        }else{
            require 'controllers/error.php';
            $controller = new Error();
            $controller->Index();
            return false;
        }
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        //cauta functiile(metodele)/argumente controller-ului prin a doua parte a url-ului
        if (isset($url[2])){
            $controller->{$url[1]}($url[2]);
        }
        else{
            if(isset($url[1])){
                $controller->{$url[1]}();
                return false;
            }else{
                $controller->Index();
            }
        }
    }
}