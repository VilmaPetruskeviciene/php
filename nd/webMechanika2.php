<?php

$spalva2 = 'pasirink spalva';

$spalva3 = $_GET['color'] ?? 'ffffff';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanika2</title>
</head>
<body style="background-color:#<?= $spalva3 ?>;">

<a href="http://localhost/php/nd/webMechanika2.php/?color="><?= $spalva2 ?></a>

</body>
</html>