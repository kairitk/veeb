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
    }else{   //kirjeldame situatsiooni, kui ühendus on saavutatud
        echo'Ühendus andmebaasi serveriga on olemas<br />';
        return $yhendus;
    }
}


//andmebaasist päringu küsimise funktsioon
function saadaParing($yhendus, $sql){
    $tulemus = mysqli_query($yhendus, $sql);
    if (!$tulemus){
        echo 'Probleem päringug' . $sql . '<br />';
        echo mysqli_error($yhendus) . '<br />';
        echo mysqli_errno($yhendus) . '<br />';
        return false;
    } else{
        echo 'Päring läks läbi<br />';
        return $tulemus;
    }
}


//andmete saatmise funktsioon
function annaAndmed($yhendus, $sql){
    $tulemus = saadaParing($yhendus, $sql);
    $andmed = array(); //massiiv, kuhu paneme päringuga saadud andmed
    if ($tulemus != false){
        while($rida = mysqli_fetch_assoc($tulemus)){
            $andmed[] = $rida;
        }
    }
    if (count($andmed) == 0){
        return false;
    } else {
        //tagastame päringu andmetega täidetud funktsiooni
        return $andmed;
    }

}



?>