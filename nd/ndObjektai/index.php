<?php
echo '<pre>';

require __DIR__.'/Kibiras1.php';
require __DIR__.'/Pinigine.php';
require __DIR__.'/Kibiras2.php';
require __DIR__.'/Kibiras3.php';
require __DIR__.'/KibirasNePo1.php';
require __DIR__.'/Stikline.php';
require __DIR__.'/Grybas.php';
require __DIR__.'/Krepsys.php';


echo "-----------1-------------";
echo "\n";
$kib1 = new Kibiras1;
$kib2 = new Kibiras1;
$kib3 = new Kibiras1;
$kib1->prideti1Akmeni();
$kib3->prideti1Akmeni();
$kib1->prideti1Akmeni();
$kib2->prideti1Akmeni();
$kib2->prideti1Akmeni();
$kib3->pridetiDaugAkmenu(10);
$kib1->pridetiDaugAkmenu(5);
echo 'kib1: ' . $kib1->kiekPririnktaAkmenu();
echo "\n";
echo 'kib2: ' . $kib2->kiekPririnktaAkmenu();
echo "\n";
echo 'kib3: ' . $kib3->kiekPririnktaAkmenu();
echo "\n";

echo "---------2---------------";
echo "\n";
$pin1 = new Pinigine;
$pin2 = new Pinigine;
$pin1->ideti(2);
$pin1->ideti(20);
$pin2->ideti(14);
$pin1->ideti(200);
$pin2->ideti(50);
$pin2->ideti(1);
print_r($pin1);
echo "\n";
print_r($pin2);
echo "\n";
echo 'viso: '.Pinigine::skaiciuoti();
echo "\n";

echo "---------3---------------";
echo "\n";
$kib31 = new Kibiras2;
$kib32 = new Kibiras2;
$kib33 = new Kibiras2;
$kib31->prideti1Akmeni();
$kib33->prideti1Akmeni();
$kib31->prideti1Akmeni();
$kib32->prideti1Akmeni();
$kib32->prideti1Akmeni();
$kib33->pridetiDaugAkmenu(10);
$kib31->pridetiDaugAkmenu(5);
echo 'kib31: ' . $kib31->kiekPririnktaAkmenu();
echo "\n";
echo 'kib32: ' . $kib32->kiekPririnktaAkmenu();
echo "\n";
echo 'kib33: ' . $kib33->kiekPririnktaAkmenu();
echo "\n";
echo 'viso: ' . Kibiras2::kiekYraAkmenu();
echo "\n";

echo "---------4---------------";
echo "\n";
$kib41 = new KibirasNePo1;
$kib42 = new KibirasNePo1;
$kib41->prideti1Akmeni();
$kib42->prideti1Akmeni();
echo 'kib41: ' . $kib41->kiekPririnktaAkmenu();
echo "\n";
echo 'kib42: ' . $kib42->kiekPririnktaAkmenu();
echo "\n";

echo "---------5---------------";
echo "\n";
echo "---------6---------------";
echo "\n";
$st1 = new Stikline(200);
$st2 = new Stikline(150);
$st3 = new Stikline(100);
//$st1->ipilti(500)->ispilti();
//$st2->ipilti($st1->ipilti(500)->ispilti())->ispilti();
$st3->ipilti($st2->ipilti($st1->ipilti(500)->ispilti())->ispilti());

var_dump($st1);
var_dump($st2);
var_dump($st3);

echo "---------7---------------";
echo "\n";
$krep = new Krepsys;
while($krep->deti(new Grybas)) {}
var_dump($krep);