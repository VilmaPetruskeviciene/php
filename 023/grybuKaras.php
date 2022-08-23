<?php 

echo '<pre>';
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$k = new Krepsys;


while($k->deti(new Grybas)){}


var_dump($k);