<?php


// echo '<pre>';

// echo "start\n";

// $data = require __DIR__ . '/d.php';

// header("Content-Type: image/jpeg");
// die;
// $data = file_get_contents(__DIR__ . '/rose.jpg');

//$x = ['labas' => 'pats tu labas'];

//$j = json_encode($x);

//file_put_contents(__DIR__ . '/x.json', $j);

$j = json_decode(file_get_contents(__DIR__ . '/x.json'), 1);

print_r($j);

// echo $data;
// echo '.';
// print_r($data);

// require __DIR__ . '/inc.php';
// require __DIR__ . '/inc.php';
// require __DIR__ . '/../015/kitas.php';


// echo "\nend\n";