<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 25.01.2018
 * Time: 10:47
 */

require_once 'tekst.php';

// loome teksti objekti
$minuTekst = new tekst();
//määrame tekstile konkreetne sisu
$minuTekst -> maaraTekst('Tere Maailm!');
// vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo '</pre';
// prindime välja
$minuTekst ->prindiTekst();

?>