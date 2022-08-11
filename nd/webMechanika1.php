<?php

$spalva1 = 'juodas';
$spalva2 = 'raudonas';

if ($_GET['color'] ?? null == 1) {
    $redBlack = 'style="background-color:#990000;"'; 
} else {
    $redBlack = 'style="background-color:#000;"';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanika1</title>
</head>
<body <?= $redBlack ?>>

<a href="http://localhost/php/nd/webMechanika1.php/?"><?= $spalva1 ?></a>
<a href="http://localhost/php/nd/webMechanika1.php/?color=1"><?= $spalva2 ?></a>
    
</body>
</html>