<?php
require_once('html.php');
echo '<h3><a href="/array.php">ARRAYS</a></h3>';
echo '<h3><a href="/strings.php">STRINGS</a></h3>';
echo '<h3><a href="/files.php">FILES</a></h3>';
echo '<pre>';
/*NEW IN PHP 7.4*/
//Arrow functions:
// Old method:
$test = array_map(function($a){return 'sasha0.0000'.++$a*2;}, [1,2,3,4,5,6]);
var_dump($test);
//New method:
$test = array_map(fn($a) => ++$a, [1,2,3]);
var_dump($test);
unset($test);
//Unpacking inside arrays
$arr = [1,2,2];
$arr2 = ['sa', ...$arr, '3'];
var_dump($arr2);
$arr2['lol'] ??= 'LOL';
var_dump($arr2);
/*END NEW*/
//echo str_replace("\n", '', str_replace(' ', '', trim(htmlspecialchars(file_get_contents('https://www.nrj.fr/webradios?radioid=158')))));
?>      
