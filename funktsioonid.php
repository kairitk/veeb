<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 14.12.2017
 * Time: 14:31
 */

function tabel($sona1, $sona2, $sona3, $sona4) {
    echo '<table border="1">';
        for($rida = 1; $rida <= 4; $rida++){
            echo '<tr>';
                 echo '<td>';
                      echo ${'sona' . $rida};
                 echo '</td>';
            echo '</tr>';
        }
    echo '</table>';
}
tabel('Kui rohkem kysimusi', 'pole', 'siis ma voin', 'teid koju lubada');

//


?>