<?php
echo '<pre>';

require __DIR__ . '/Tv.php';
require __DIR__ . '/Kibiras.php';




// $tv1 = New Tv(55);

// print_r($tv1->showList());


// var_dump($tv1);

$stu1 = Kibiras::naujasKibiras();
$stu2 = unserialize(serialize($stu1));


$stu2->pridetiDaugAkmenu(28);
$stu1->prideti1Akmeni();
$stu1->prideti1Akmeni();
$stu2->prideti1Akmeni();
$stu1->pridetiDaugAkmenu(3);


echo '1: ' . $stu1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $stu2->kiekPririnktaAkmenu();
echo "\n";
echo 'VISO: ' . $stu1->kiekBendraiYraAkmenu();
echo "\n";
echo 'VISO: ' . Kibiras::kiekYraAkmenu();