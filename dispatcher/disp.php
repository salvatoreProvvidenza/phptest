<?php
/**
 * Created by PhpStorm.
 * User: salvatore
 * Date: 31/07/16
 * Time: 18.55
 */

$routeConfig = '/var/www/html/test/config/route.json';
$contexRoot = '/test/';

printf($_SERVER["DOCUMENT_ROOT"]. "<br>");
echo  file_get_contents($routeConfig) . "<br>";

$json = json_decode(file_get_contents($routeConfig), true);


$stringUri = $_SERVER['REQUEST_URI'];


$stringUri = str_replace($contexRoot,"",$stringUri);

printf($json[$stringUri]. "<br>");

printf($stringUri. "<br>");