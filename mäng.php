<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 12.01.2018
 * Time: 8:55
 */
function vorm() {
    $serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ? $_POST['serveriArv'] : rand(1,20);
    echo $serveriArv . '<br />';
    echo '
    <form action="mäng.php" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="text" name="kasutajaArv"><br/>
    <input type="submit" value="Kontrolli">
    </form>
    ';
}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST); // $_GET voi $_POST see on spetsiaalne funktsioon ja on alati suurte tähtedega
    echo '</pre>';
    $korras = false;
    if(empty($_POST)){
        echo 'vorm ei saatnud andmeid';
    } else {
        echo 'andmed on saadetud';
        if(empty($_POST['kasutajaArv'])){
            echo 'andmed peavad olema sisestatud<br/>';
        } else {
            echo 'andmed on sisestatud<br/>';
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv){
    if ($kasutajaArv > $serveriArv){
        echo 'pakutud väärtus on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv){
        echo 'pakutud väärtus on väiksem<br />';
    }
    if (abs($serveriArv - $kasutajaArv) <= 5){
        if ($kasutajaArv == $serveriArv){
            echo 'õnnitleme! arvasid ära!<br />';
            exit;
        }
        echo 'aga oled juba väga lähedal<br />';
    }
}


vorm();
// http://kairitkivima.ikt.khk.ee/veeb/m%C3%A4ng.php?kasutajaArv=3  method='get'   print_r($_GET)
// http://kairitkivima.ikt.khk.ee/veeb/m%C3%A4ng.php                method='post'   print_r($_POST)
// lisaks olemas veel method='request' kuid selles ylesandes pole seda käsitletud

if (vormiAndmed()) {
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
}else {
    echo 'andmed peavad olema sisestatud<br />';
}




?>