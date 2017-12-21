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




//Ülesanded
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikus 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 */
function looMassiiv($elementideArv){
    $massiiv = array();
    for($kord = 1; $kord <= $elementideArv; $kord++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$testMassiiv = looMassiiv(5);
echo '<pre>';
print_r($testMassiiv);
echo '</pre>';
echo '<hr />';

/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul.
 * Väljundi loomisel kasuta foreach tsüklit.
 */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr>';
        echo '<td>';
        echo $element;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
valjastaMassiiv($testMassiiv);
echo '<hr/>';

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiivi)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni.
 */
function vahetaMinMax($massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'Minimum = ' . $min . '<br/>';
    echo 'Maximum = ' . $max . '<br />';
    for ($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        } else if($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
        // echo $massiiv[$i] . '<br/>';
    }
}
vahetaMinMax($testMassiiv);
valjastaMassiiv($testMassiiv);
echo '<hr/>';


/*
 * 4.
 *
 */


?>