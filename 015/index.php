<?php
echo '<pre style="color: crimson;">';

$mas = [];

foreach(range(1, 30) as $_) {
    $mas[] = rand(5, 25);
}

// print_r($mas);

$max = $mas[0];
$indexes = [];

foreach($mas as $index => $value) {
    if ($value > $max) {
        $max = $value;
        $indexes = [];
        $indexes[] = $index;
    } else if ($max == $value) {
        $indexes[] = $index;
    }
}

// print_r($max);
// echo "\n";
// print_r($indexes);

$mas2 = [];
foreach(range(1, 200) as $_) {
    $mas2[] = 'ABCD'[rand(0, 3)];
}

// print_r($mas2);

// function fun(string $s = 'bevardi', array|string $v = 'bla bla bla') : string {
//     return "$s $v, ka tu? \n";
// }

// $ss = 'Labukas';

// $kibiras = fun($ss, 'Jonai');

// echo ($kibiras);


// $kibiras = fun('Sveikute', 'Teta Zose');

// echo ($kibiras);


// $kibiras = fun('Hello');

// echo ($kibiras);


$moreFun = function($b) {

    $notFun = function($a) {
        print_r('Labukas! '.$a);
    };

    return $notFun($b);

};

// $moreFun('dddccc');







function doPrint($fun, $ka) {
    return $fun($ka);
}


$burbulas = ' Baravykas';

doPrint(
    function($str) use ($burbulas) {
        echo $str . $burbulas;
    }
    ,
    'GRYBAS33'
);



// $c = doPrint(
//     fn($str) => $str . $burbulas
//     ,
//     'GRYBAS101'
// );

// echo $c;

$mas = [44, 5, 9, 11, 0, 54, 7];


usort($mas, fn($a, $b) => 2 - rand(1, 3));


print_r($mas);

