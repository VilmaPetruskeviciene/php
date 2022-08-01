<?php

echo '-----1-----<br>';

$vardas = 'Vilma';
$pavarde = 'Petruskeviciene';
$gimimoMetai = 1978;
$dabarMetai = '2022';

$amzius = $dabarMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).<br>";

echo '-----2-----<br>';

$skaicius1 = rand(0, 4);
$skaicius2 = rand(0, 4);
echo $skaicius1, '  ', $skaicius2, '<br>';
if ($skaicius1 >= $skaicius2 && $skaicius1 !== 0 && $skaicius2 !== 0) {
    echo round(($skaicius1 / $skaicius2), 2), '<br>';
  } else if ($skaicius1 <= $skaicius2 && $skaicius1 !== 0 && $skaicius2 !== 0) {
    echo round(($skaicius2 / $skaicius1), 2), '<br>';
  } else {
    echo 'Dalyba is nulio negalima. <br>';
  }

echo '-----3-----<br>';