<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 25.01.2018
 * Time: 10:35
 */

class tekst
{ //klassi algus
    //klassi omadused - väljad - fields
    // klassi muutuja
    var $sone = '';  //teksti kirjeldavad sõnad
    // klassi tegevused
    // meetodid - suudavad seletada, kuidas yksiktegevus sooritataksee
    // teksti määramine
    // maaraTekst('Tere Maailm');
    function maaraTekst($sone){
        $this ->sone = $sone;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this ->sone . '<br />';
    }
} //klassi lõpp

?>