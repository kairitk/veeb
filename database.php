<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 19.01.2018
 * Time: 13:08
 */

//nõuame andmebaasi töötlusfunktsioonid kasutusele
require_once 'database_functions.php';

//tekitame ühenduse andmebaasiga
$dbYhendus = yhendus();

//koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$sql = saadaParing($dbYhendus, $sql);

?>