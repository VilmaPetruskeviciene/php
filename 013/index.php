<?php

echo '<pre>';

// for ($i = 0; $i < 5; $i++) {
//     echo "Dabar: $i \n";
// }


$x = 0;
do {
    echo "Dabar: $x \n";
    $x++;


    $y = 0;
    while($y < 5) {
        echo "D->: $y \n";
        $y++;

            for ($i = 0; $i < 5; $i++) {
                echo 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
            }

    }



} while($x < 5);
