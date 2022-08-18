<?php

require __DIR__ . '/Nso.php';
require __DIR__ . '/Tv.php';

echo '<pre>';



// $nso1 = new Nso;
// $nso2 = new Nso;
// $nso3 = new Nso;

$samsung = new Tv('Silver', '40"');
$lg = new Tv('Black', '60"');
$silelis = new Tv('Yellow');

// var_dump($nso1);
// var_dump($nso2);
// var_dump($nso3);
// var_dump($lg);

// $lg->color = 'black';
// $silelis->color = 'yellow';

// echo $samsung->color;
// echo "\n";
// echo $lg->color;
// echo "\n";
// echo $silelis->color;
// echo "\n";
$silelis->showColor();
echo "\n";
$lg->showColor();
echo "\n";
$samsung->showColor();
echo "\n";

$samsung->size = 'dhklsfhd';

echo $samsung->size;