<?php

echo '-----1-----<br>';

$mas1 = [];
foreach (range(0, 29) as $_) {
    $mas1[] = rand(5, 25);    
}
print_r($mas1);
echo '<br>';

echo '-----2a-----<br>';
$count21 = 0;
foreach ($mas1 as $val) {
    if ($val > 10) {
        $count21++;
    }
}
echo "Reiksmiu didesniu uz 10 yra $count21 <br>";

echo '-----2b-----<br>';

foreach ($mas1 as $key => $val) {
    if ($val == max($mas1)) {
        echo "Maksimali reiksme: $val, indeksas: $key. <br>";
    }
}

echo '-----2c-----<br>';

$count23 = 0;
foreach ($mas1 as $key => $val) {
    if ($key % 2 == 0) {
        $count23 += $val;
    }
}
echo $count23, '<br>';

echo '-----2d-----<br>';

$mas24 = [];
foreach ($mas1 as $key => $val) {
    $mas24[] = $val - $key;
}
print_r($mas24);
echo '<br>';

echo '-----2e-----<br>';

foreach (range(1, 10) as $_) {
    $mas24[] = rand(5, 25);    
}
print_r($mas24);
echo '<br>';

echo '-----2f-----<br>';

$mas25 = [];
$mas26 = [];
foreach ($mas24 as $key => $val) {
    if ($key % 2 == 0) {
        $mas26[] = $val;
    } else {
        $mas25[] = $val;
    }
}
print_r($mas26);
echo '<br>';
print_r($mas25);
echo '<br>';

echo '-----2g-----<br>';

$mas28 = $mas1;
foreach ($mas28 as $key => $val) {
    if ($key % 2 == 0 && $val > 15) {
        $mas28[$key] = 0;
    } 
}
print_r($mas28);
echo '<br>';

echo '-----2h-----<br>';

foreach ($mas1 as $key => $val) {
    if ($val > 10) {
        echo $key, '<br>';
        break;
    } 
}

echo '-----2i-----<br>';

$mas29 = $mas1;
foreach ($mas29 as $key => $val) {
    if ($key % 2 == 0) {
        unset($mas29[$key]);
    } 
}
print_r($mas29);
echo '<br>';

echo '-----3-----<br>';

$mas3 = [];
foreach (range(0, 199) as $_) {
    $mas3[] =  ['A', 'B', 'C', 'D'][rand(0, 3)];   
}
print_r($mas3);
echo '<br>';

$a = 0;
$b = 0;
$c = 0;
$d = 0;
foreach ($mas3 as $val) {
    if ($val == 'A') {
        $a++;
    }
    if ($val == 'B') {
        $b++;
    }
    if ($val == 'C') {
        $c++;
    }
    if ($val == 'D') {
        $d++;
    }
}
echo "A yra $a, <br> B yra $b, <br> C yra $c, <br> D yra $d. <br>";

echo '-----4-----<br>';

sort($mas3);
print_r($mas3);
echo '<br>';

echo '-----5-----<br>';

$mas51 = [];
foreach (range(0, 199) as $_) {
    $mas51[] =  ['A', 'B', 'C', 'D'][rand(0, 3)];   
}
$mas52 = [];
foreach (range(0, 199) as $_) {
    $mas52[] =  ['A', 'B', 'C', 'D'][rand(0, 3)];   
}
$mas53 = [];
foreach (range(0, 199) as $_) {
    $mas53[] =  ['A', 'B', 'C', 'D'][rand(0, 3)];   
}

$masBendr = [];
foreach ($mas51 as $key => $val) {
    $masBendr[$key] = $mas51[$key].$mas52[$key].$mas53[$key]; 
}
print_r($masBendr);
echo '<br>';

$result = count(array_unique($masBendr));
echo "Unikalios reiksmes: $result. <br>";

$masUnik = array_count_values($masBendr);
print_r($masUnik);
echo '<br>';
$count5 = 0;
foreach ($masUnik as $key => $val) {
    if ($val == 1) {
        $count5++;
    }
}
echo "Unikalios kombinacijos: $count5. <br>";

echo '-----6-----<br>';

$mas61 = [];
foreach (range(0, 99) as $a) {
    if (!in_array($a, $mas61)) {
        $mas61[] = rand(100, 999);
    } 
}
print_r($mas61);
echo '<br>';

$mas62 = [];
foreach (range(0, 99) as $a) {
    if (!in_array($a, $mas62)) {
        $mas62[] = rand(100, 999);
    } 
}
print_r($mas62);
echo '<br>';

echo '-----7-----<br>';

$mas7 = [];
foreach ($mas61 as $key => $a) {
    if (!in_array($a, $mas62)) {
        $mas7[] = $mas61[$key];
    } 
}
print_r($mas7);
echo '<br>';

echo '-----8-----<br>';

$mas8 = [];
foreach ($mas61 as $key => $a) {
    if (in_array($a, $mas62)) {
        $mas8[] = $mas61[$key];
    } 
}
print_r($mas8);
echo '<br>';

echo '-----9-----<br>';

$mas9=array_combine($mas61,$mas62);
print_r($mas9);
echo '<br>';

echo '-----10-----<br>';

$mas10 = [];
foreach (range(0, 1) as $_) {
    $mas10[] = rand(5, 25);
}
for ($i=2; $i < 10; $i++) { 
    $mas10[] = ($mas10[count($mas10)-1]) +  ($mas10[count($mas10)-2]);
 }
print_r($mas10);
echo '<br>';
