<?php

echo '-----1-----<br>';

$asm1 = 'Jonas Jonaitis';
$asm2 = 'Petras Petraitis';

if (strlen($asm1) > strlen($asm2)) {
    echo $asm1, '<br>';
} else {
    echo $asm2, '<br>';
}

echo '-----2-----<br>';

$asm21 = 'Jonas';
$asm22 = 'Jonaitis';
echo strtoupper($asm21), '<br>';
echo strtolower($asm22), '<br>';

echo '-----3-----<br>';

$asm31 = 'Jonas';
$asm32 = 'Jonaitis';
echo $asm33 = substr($asm31,0,1).substr($asm32,0,1), '<br>';

echo '-----4-----<br>';

$asm41 = 'Jonas';
$asm42 = 'Jonaitis';
echo $asm43 = substr($asm31,-3).substr($asm32, -3), '<br>';

echo '-----5-----<br>';

$asm51 = 'An American in Paris';
echo str_ireplace("A","*",$asm51), '<br>';

echo '-----6-----<br>';

$asm61 = 'An American in Paris';
echo substr_count($asm61,"A") + substr_count($asm61,"a"), '<br>';

echo '-----7-----<br>';

$asm71 = 'An American in Paris';
$asm72 = "Breakfast at Tiffany's";
$asm73 = '2001: A Space Odyssey';
$asm74 = "It's a Wonderful Life";

echo str_ireplace(array('a','e','i','o','u', 'y'), '', $asm71), '<br>';
echo str_ireplace(array('a','e','i','o','u', 'y'), '', $asm72), '<br>';
echo str_ireplace(array('a','e','i','o','u', 'y'), '', $asm73), '<br>';
echo str_ireplace(array('a','e','i','o','u', 'y'), '', $asm74), '<br>';

echo '-----8-----<br>';

$asm81 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $asm81, '<br>';
echo filter_var($asm81, FILTER_SANITIZE_NUMBER_INT), '<br>';

preg_match('/[1-9]/', $asm81, $asm82);
echo $asm82[0], '<br>';

echo '-----9-----<br>';

$asm91 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$asm92 = explode(" ", $asm91);
print_r($asm92);
$asm93 = 0;
$lenght = count($asm92);
echo $lenght, '<br>';
for ($i=0; $i < $lenght; $i++) { 
    if (mb_strlen($asm92[$i]) <= 5) {
        $asm93 ++;
    }
}
echo $asm93, '<br>';

echo '------------<br>';

$asm911 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$asm922 = explode(" ", $asm911);
print_r($asm922);
echo '<br>';
$asm933 = 0;
$lenght = count($asm922);
echo $lenght, '<br>';
for ($i=0; $i < $lenght; $i++) { 
    if (mb_strlen($asm922[$i]) <= 5) {
        $asm933 ++;
    }
}
echo $asm933, '<br>';

echo '-----10-----<br>';

$asm10 = 'abcdefghijklmnopqrstuvwxyz';
$randstring = $asm10[rand(0, 25)].$asm10[rand(0, 25)].$asm10[rand(0, 25)];
echo $randstring, '<br>';
