<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 14.12.2017
 * Time: 13:35
 */

for($rida = 1; $rida <= 5; $rida++) {
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++) {
        $symbol = rand(0,9);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
        'värviline tekst'.
    '</font>'.
    '<br/>';
}

?>