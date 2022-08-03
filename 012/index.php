<?php


$r = rand(1, 6);

echo "<h$r>$r</h$r>";


$_1 = rand(0, 2);
$_2 = rand(0, 2);
$_3 = rand(0, 2);
$_4 = rand(0, 2);

$two = 0;

if ($_1 == 2) {
    $two++;
}
if ($_2 == 2) {
    $two++;
}
if ($_3 == 2) {
    $two++;
}
if ($_4 == 2) {
    $two++;
}

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);

$zero = 4 - $one -$two;

echo "$_1  $_2  $_3  $_4 ----- $zero:$one:$two";

echo '<br>';

var_dump(false == null);

echo '<br>';


$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) {
    echo 'Begemotų yra daugiausiai';
}

// 6 > 2 && 6 > 3
// true && true
//true
echo '<br>';echo '<br>';

$a = true ? 'Jo' : 'Gal';

echo $a;

// echo '<br>';echo '<br>';

// $i = null;
// var_dump(isset($i));
echo '<br>';

// $i=1;
// isset($i); // gražina TRUE
// $i=null; 
// isset($i); //gražina FALSE

// $vienas = 77;

$vienas = $vienas ?? 8;

echo '<br>';



$p = ['S', 'M', 'L', 'XL'][rand(0, 3)];


echo 'Senukas atnešė: ' . $p;

// if ($p == 'S') {
//     echo '<br>Tikrinam S';
// }
// if ($p == 'S' || $p == 'M') {
//     echo '<br>Tikrinam M';
// }
// if ($p == 'S' || $p == 'M' || $p == 'L') {
//     echo '<br>Tikrinam L';
// }
// if ($p == 'S' || $p == 'M' || $p == 'L' || $p == 'XL') {
//     echo '<br>Tikrinam XL';
// }

switch($p) {
    case 'S': echo '<br>Tikrinam S';
    case 'M': echo '<br>Tikrinam M';
    case 'L': echo '<br>Tikrinam L';
    case 'XL': echo '<br>Tikrinam XL';
}
