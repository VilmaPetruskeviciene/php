<?php

echo '<pre>';

$mas = ['balta', 9 => 'juoda', 'raudona'];

// $mas = array('balta', 9 => 'juoda', 'raudona');

$mas['super'] = 'Super Katė';

$mas[] = 'Katė';

$mas[7] = 'Šunius';

$mas['0.87'] = 'Dramblys';

$mas[] = 'Katė';

echo count($mas);

echo '<br>';



echo '<br>';

// for ($i = 0; $i < 5; $i++) {
//     echo "Dabar: $i \n";
// }

// foreach (range(1, 5) as $val) {
//     echo "Dabar: $val \n";
// }

// $colors = ['red', 'green', 'blue', 'yellow'];


// foreach ($colors as &$value) {}

// // unset($value);

// foreach ($colors as $value) {}

// print_r($colors);

$colors = [
    ['red', 'green', 'blue', 'yellow'],
    'labas',
    ['dramblys', 'bebras', 'briedis', 'barsukas', 'traktorius'],
    [77, 12]
];

echo $colors[1][0];

foreach ($colors as $stalcius) {
    if (is_array($stalcius)) {
        foreach ($stalcius as $daiktas) {
            echo "$daiktas\n";
        }
    } else {
        echo "$stalcius\n";
    }

}

$_3X3 = [];
$count = 0;

// foreach (range(1, 3) as $_) {

//     $_3 = [];
//     foreach (range(1, 3) as $_) {
//         $_3[] = ++$count;
//     }

//     $_3X3[] = $_3;
// }

foreach (range('a', 'Z') as $a) {
    foreach (range('a', 'Z') as $b) {
        $_3X3[$a][$b][rand(1, 9)][$a][$b][rand(1, 9)][$a][$b][rand(1, 9)] = ++$count;
    }
}

print_r($_3X3);