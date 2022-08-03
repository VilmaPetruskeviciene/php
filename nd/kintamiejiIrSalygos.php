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

$sk1 = rand(0, 25);
$sk2 = rand(0, 25);
$sk3 = rand(0, 25);
echo $sk1, ' ', $sk2, ' ', $sk3, '<br>';
if ($sk1 >= $sk2 && $sk1 <= $sk3 || $sk1 <= $sk2 && $sk1 >= $sk3) {
  echo $sk1, '<br>';
} elseif ($sk2 >= $sk1 && $sk2 <= $sk3 || $sk2 <= $sk1 && $sk2 >= $sk3) {
  echo $sk2, '<br>';
} else {
  echo $sk3, '<br>';
}

echo '-----4-----<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo $a, ' ', $b, ' ', $c, '<br>';
if ($a + $b > $c && $b + $c > $a && $c + $a > $b) {
  echo 'galima sudaryti trikampį';
} else {
  echo 'negalima sudaryti trikampio';
}

echo '-----5-----<br>';

$sk51 = rand(0, 2);
$sk52 = rand(0, 2);
$sk53 = rand(0, 2);
$sk54 = rand(0, 2);
echo $sk51, ' ', $sk52, ' ', $sk53, ' ', $sk54, '<br>';
$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
if ($sk51 == 0) {
    ++$sum0;
  } if ($sk52 == 0) {
    ++$sum0;
  } if ($sk53 == 0) {
    ++$sum0;
  } if ($sk54 == 0) {
    ++$sum0;
  } if ($sk51 == 1) {
    ++$sum1;
  } if ($sk52 == 1) {
    ++$sum1;
  } if ($sk53 == 1) {
    ++$sum1;
  } if ($sk54 == 1) {
    ++$sum1;
  } if ($sk51 == 2) {
    ++$sum2;
  } if ($sk52 == 2) {
    ++$sum2;
  } if ($sk53 == 2) {
    ++$sum2;
  } if ($sk54 == 2) {
    ++$sum2;
  }
echo "Nuliu yra $sum0, <br> Vienetu yra $sum1, <br> Dvejetu yra $sum2, <br>";

echo '-----6-----<br>';

$tag = rand(1, 6);
echo "<h$tag>$tag</h$tag><br>";

echo '-----7-----<br>';

$sk71 = rand(-10, 10);
$sk72 = rand(-10, 10);
$sk73 = rand(-10, 10);
echo $sk71, ' ', $sk72, ' ', $sk73, '<br>';
if ($sk71 < 0) {
  echo "<p style='color:green;'>$sk71</p>";
} if ($sk71 === 0) {
  echo "<p style='color:red;'>$sk71</p>";
} if ($sk71 > 0) {
  echo "<p style='color:blue;'>$sk71</p>";
} if ($sk72 < 0) {
  echo "<p style='color:green;'>$sk72</p>";
} if ($sk72 === 0) {
  echo "<p style='color:red;'>$sk72</p>";
} if ($sk72 > 0) {
  echo "<p style='color:blue;'>$sk72</p>";
} if ($sk73 < 0) {
  echo "<p style='color:green;'>$sk73</p>";
} if ($sk73 === 0) {
  echo "<p style='color:red;'>$sk73</p>";
} if ($sk73 > 0) {
  echo "<p style='color:blue;'>$sk73</p>";
}

echo '-----8-----<br>';

$zvakiuKiekis = rand(5, 3000);
echo "Zvakiu kiekis: $zvakiuKiekis <br>";
$suma = $zvakiuKiekis * 1;
if ($suma > 2000) {
  echo $suma * 0.96, ' EUR', '<br>';
} elseif ($suma > 1000) {
  echo $suma * 0.97, ' EUR', '<br>';
} else {
  echo $suma, ' EUR', '<br>';
}

echo '-----9-----<br>';

$sk91 = rand(0, 100);
$sk92 = rand(0, 100);
$sk93 = rand(0, 100);
echo $sk91, ' ', $sk92, ' ', $sk93, '<br>';
echo 'Vidurkis: ', $vidurkis = round((($sk91 + $sk92 + $sk93) / 3), 0), '<br>';
$sk911 = 0;
$sk921 = 0;
$sk931 = 0;
$daliklis = 0;
if ($sk91 > 10 && $sk91 < 90) {
  $sk911 = $sk91;
  ++$daliklis;
} if ($sk92 > 10 && $sk92 < 90) {
  $sk921 = $sk92;
  ++$daliklis;
} if ($sk93 > 10 && $sk93 < 90) {
  $sk931 = $sk93;
  ++$daliklis;
}
echo 'Vidurkis2: ', $vidurkis2 = round((($sk911 + $sk921 + $sk931) / $daliklis), 0), '<br>';

echo '-----10-----<br>';

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
echo sprintf('%02d:%02d:%02d', $valandos,  $minutes,  $sekundes), '<br>';
$papildSek = rand(0, 300);
echo "$papildSek <br>";
$visoSek = $sekundes + $papildSek;
if ($visoSek > 59) {
  $sekundes = $visoSek % 60;
  $minutes = $minutes + floor($visoSek / 60);
  $valandos = $valandos + floor($minutes / 60);
} else {
  $sekundes = $visoSek;
}
echo sprintf('%02d:%02d:%02d', $valandos,  $minutes,  $sekundes), '<br>';
/*
printf() //add leading zeros
echo sprintf('%02d:%02d:%02d', $sk, $sk1, $sk2)
*/
echo '-----11-----<br>';