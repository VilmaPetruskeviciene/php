<?php
//echo '<pre>';

echo '-----1-----<br>';

function one($t) {
    return "<h1>$t</h1>";
}
echo one('Hello!');

echo '-----2-----<br>';

function two($t, $n) {
    return "<h$n>$t</h$n>";
}

echo two('Hello!', rand(1, 6));

echo '-----3-----<br>';

$str3 = md5(time());
echo $str3, '<br>';
$result3 = preg_replace_callback(
    '/\d+/m',
    function($matches) {
        return "<h1 style='display: inline'>$matches[0]</h1>";
    },
    $str3
);
echo $result3, '<br>';

echo '-----4-----<br>';

function four(array | int $num4) {
    $count4 = 0;
    for ($i = $num4-1; $i > 1; $i--) { 
        if ($num4 % $i == 0) {
            $count4++;
        }
    }
    return $count4;
}
echo four(30), '<br>';

echo '-----5-----<br>';

$mas5 = [];
$masDal = [];
foreach (range(0, 99) as $_) {
    $mas5[] = rand(33, 77);
}
print_r($mas5);
echo '<br>';

foreach ($mas5 as $val) {
    $masDal[] = four($val);
}
arsort($masDal);
print_r($masDal);
echo '<br>';
echo '------------------------------<br>';
print_r(array_replace($masDal,$mas5));
echo '<br>';

echo '-----6-----<br>';

$mas6 = [];
foreach (range(0, 99) as $_) {
    $mas6[] = rand(333, 777);
}
print_r($mas6);
echo '<br>';
echo '------------------------------<br>';
$masDal6 = [];
foreach ($mas6 as $key => $val) {
    if (four($val) != 0) {
        $masDal6[] = $val; 
    }
}
print_r($masDal6);
echo '<br>';

echo '-----7-----<br>';

$num7 = rand(10, 20);
$count72 = rand(10, 30);
function seven($sv1, $sv2) {
    static $count71 = 0;
    $mas7 = [];
    while ($count71 < $sv2) {
        $count71++;
        foreach (range(1, $sv1-1) as $_) {
            $mas7[] = rand(0, 10);
        }
        if ($count71 < $sv2) {
            $mas7[] = seven($sv1, $sv2);
        } else {
            $mas7[] = 0;
        }
        
    }  
    return $mas7;
}
$mas77 = seven($num7, $count72);
print_r($mas77);
echo '<br>';

echo '-----8-----<br>';

function getSum(array|int $val) {
    $sum = 0;
    if (is_int($val)) {
        $sum += $val;
    } else {
        foreach($val as $v) {
            $sum += getSum($v);
        }
    }
    return $sum;
}
print_r(getSum($mas77));
echo '<br>';

echo '-----9-----<br>';

function is_prime_via_preg_expanded($number) {
    return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
}
$arr93 = [];
$start = 2;
$end = 33;
$i=$start;
while ($i<=$end) {
    if (is_prime_via_preg_expanded($i)) {
        $arr93[] = $i;
    }
    $i++; 
}
print_r($arr93);
echo '<br>';
echo '-------------------------------';
echo '<br>';

function primeNumber($arr93) {
    $arr9 = [];
    for ($i=0; $i < 3; $i++) { 
        $arr9[] = rand(1, 33);
    }

    print_r($arr9);
    echo '<br>';

    $count9 = 0;
    for ($j=count($arr9); $j < count($arr9)-3; $j--) { 
        if (in_array($j, array_slice($arr93, -3))) {
            $count++;
        }
    }
    if ($count9 < 3) {
        $arr9[] = rand(1, 33);
    } else {
        return $arr9;
    }
}
$resultPrime = primeNumber($arr93);
print_r($resultPrime);
echo '<br>';


/*
function primeNumber() {
    $arr9 = [];
    for ($i=0; $i < 3; $i++) { 
        $arr9[] = rand(1, 33);
    }
    $Three = array_slice($arr9, -3);
    
    foreach($Three as $val) { 
        if ($val == 1 || $val == 0 || $val % 2 !== 0) {
        $arr9[] = rand(1, 33);  primeNumber();
    }
         return $arr9;
    }
}
$resultPrime = primeNumber();
*/

echo '-----10-----<br>';
