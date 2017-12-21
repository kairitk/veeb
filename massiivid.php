<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 21.12.2017
 * Time: 14:20
 */

// 21.12 tundide ylesannete lahendamiseks


$arvud = array(); // see on tyhi massiiv
// lisame väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;
$arvud[] = 3;

// kuidas luua juba väätustega massiivi
$arvud = array(1, 2, 3, 4, 5);

echo $arvud; // vastus Array

// testväljastus
echo '<pre>';
print_r($arvud);
echo '</pre>';

// korralik väljastus esimese variandina
for($i = 0; $i < count($arvud); $i++) {
    echo '<b>' . $arvud[$i] . '</b><br />';
}

// korralik väljastus teise variandina
foreach ($arvud as $arv){
    echo '<i>' . $arv . '</i><br />';
}


?>