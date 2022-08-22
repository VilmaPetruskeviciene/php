<?php
echo '<pre>';

require __DIR__.'/Tv.php';
require __DIR__.'/Kibiras.php';

//print_r(Tv::$list);
//$tv1 = new Tv(55);
//var_dump($tv1);
//print_r($tv1->showList());


$stu1 = new Kibiras;
$stu2 = new Kibiras;

$stu2->pridetiDaugAkmenu(28);
$stu1->prideti1Akmeni();
$stu1->prideti1Akmeni();
$stu2->prideti1Akmeni();
$stu1->pridetiDaugAkmenu(3);

echo '1: ' . $stu1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $stu2->kiekPririnktaAkmenu();
echo "\n";
echo 'viso: ' . $stu2->kiekBendraiYraAkmenu();
echo "\n";
echo 'viso: ' . Kibiras::kiekYraAkmenu();