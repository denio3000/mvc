<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 30/01/14
 * Time: 00:03
 */

class LoginModel extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function run(){

        $query = $this->db->prepare("SELECT user FROM users WHERE user= :user AND password = MD5(:password)");
        $query->execute(array(
            ':user' => $_POST['user'],
            ':password' => $_POST['password']
        ));
        $count = $query->rowCount();

        if ($count>0){
            //login
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        }else{
            //error
            header('location: ../login');
        }
    }

} 