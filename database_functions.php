<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 19.01.2018
 * Time: 12:31
 */

require_once 'database_conf.php'; //nõuame konfiguratsioonifaili sisu kasutamist.

//andmebaasi serveriga ühendamine ja andmebaasi valik.
function yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //kirjeldame situatsiooni, kui ühendust pole
    if (!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br />';
        echo mysqli_connent_error() . '<br/>';
        echo myqli_connect_errno() . '<br />';
        return false;
    }else{
        echo'Ühendus andmebaasi serveriga on olemas<br />';
        return $yhendus;
    }
}




?>