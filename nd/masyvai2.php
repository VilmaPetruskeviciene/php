<?php

echo '-----1-----<br>';

$arr1 = [];
foreach (range(1, 10) as $_) {
    $arr11 = [];
    foreach (range(1, 5) as $_) {
        $arr11[] = rand(5, 25);
    }
    $arr1[] = $arr11;
}
print_r($arr1);
echo '<br>';

echo '-----2a-----<br>';

$count2 = 0;
foreach ($arr1 as $a) {
    foreach ($a as $b) {
        if ($b > 10) {
            $count2++;
        }
    }
}
echo $count2, '<br>';

echo '-----2b-----<br>';

$arr22 = [];
foreach ($arr1 as $a) {
    foreach ($a as $b) {
        if ($b == max($a)) {
            $arr22[] = $b;
        }
    }
}
print_r($arr22);
echo '<br>';
foreach ($arr22 as $val) {
    if ($val == max($arr22)) {
        echo "Maksimali reiksme: $val. <br>";
        break;
    }
}

echo '-----2c-----<br>';

$arr23 = [];
$count22 = 0;
foreach ($arr1 as $key => $val) {
    $arr23[] = array_sum(array_column($arr1, $key));
    $count22++;
    if (count($val) == $count22) {
        break;
    }   
}
print_r($arr23);
echo '<br>';

echo '-----2d-----<br>';

foreach ($arr1 as $key => $_) {
    foreach (range(1, 2) as $_) {
        $arr1[$key][] = rand(5, 25);
    }
}
print_r($arr1);
echo '<br>';

echo '-----2e-----<br>';

$arr25 = [];
foreach ($arr1 as $key1 => $a) {
    $arr25[] = array_sum($a); 
}
print_r($arr25);
echo '<br>';

echo '-----3-----<br>';

$arr3 = [];
foreach (range(1, 10) as $_) {
    $arr33 = [];
    foreach (range(2, rand(2, 20)) as $_) {
        $arr33[] = chr(rand(65, 90));
    }
    $arr3[] = $arr33;
}
print_r($arr3);
echo '<br>';
foreach ($arr3 as $key => $_) {
    array_multisort($arr3[$key], SORT_STRING);
}
print_r($arr3);
echo '<br>';

echo '-----4-----<br>';

rsort($arr3);
print_r(array_reverse($arr3));
echo '<br>';

$count3 = 0;
foreach ($arr3 as $key1 => $a) {
    foreach ($a as $key2 => $b) {
        if ($b == 'K') {
            $arr3[$count3] = $a;
            $count3++;
        } 
    }
}
print_r($arr3);
echo '<br>';

echo '-----5-----<br>';

$arr5 = [];
$arr51 = ['user_id', 'place_in_row'];
foreach (range(0, 29) as $val) {
    foreach ($arr51 as $key) {
        if ($key == 'user_id') {
            $arr5[$val][$key] = rand(1, 1000000);
        } else {
            $arr5[$val][$key] = rand(0, 100);
        }
    }
}
print_r($arr5);
echo '<br>';

echo '-----6-----<br>';

array_multisort(array_column($arr5, 'user_id'), $arr5);
print_r($arr5);
echo '<br>';
echo '--------------------------------------------------------<br>';
array_multisort(array_column($arr5, 'place_in_row'), $arr5);
print_r(array_reverse($arr5));
echo '<br>';

echo '-----7-----<br>';
/*
$arr71 = ['name', 'surname'];
foreach ($arr5 as $val) {
    foreach ($arr71 as $key) {
        if ($key == 'name') {
            $arr5[$val][$key] = range(5, 15)[chr(rand(65, 122))];
        } else {
            $arr5[$val][$key] = range(5, 15)[chr(rand(65, 122))];
        }
    }
}
print_r($arr5);
echo '<br>';
*/