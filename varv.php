<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 14.12.2017
 * Time: 13:35
 */

header('Refresh: 1');
//see header osa tekitab automaatse refresh-i iga 1 sekundi järel

for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++) {
        $juhuarv = rand(0,15);
        $symbol = dechex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'värviline tekst'.
    '</font>'.
    '<br/>';
}

?>