<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 12.01.2018
 * Time: 8:42
 */
$opilane = array (
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);

echo '<pre>';
print_r($opilane);
echo '</pre>';
echo '<hr/>';



foreach ($opilane as $vaartus) {
    echo $vaartus . '<br/>';
}
echo '<hr/>';



foreach ($opilane as $vaartus => $vaartus) {
    echo $vaartus . '<br/>';
}
echo '<hr/>';



foreach ($opilane as $element => $vaartus) {
    echo $element . ' - ' . $vaartus . '<br/>';
}
echo '<hr/>';





?>