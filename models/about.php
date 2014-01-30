<?php
/**
 * Created by PhpStorm.
 * User: stefanita
 * Date: 29/01/14
 * Time: 20:37
 */

class AboutModel extends Model{

    function __construct(){
    }
    function getStudii(){
        //$query = 'select "studii" from  table X where id='. $id;
        //$query->setQuery;
        //$db->setQuery($query);
        //$result = $db->loadResult();

        $result = 'Facultatea de Administratie Publica';

        return $result;
    }

}