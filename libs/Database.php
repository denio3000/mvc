<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 30/01/14
 * Time: 00:09
 */
class Database extends PDO
{
    public function __construct(){

    parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

    }
}