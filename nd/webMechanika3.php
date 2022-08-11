<?php

$spalva = $_GET['color'] ?? 'ffffff';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanika3</title>
</head>
<body style="background-color:#<?= $spalva ?>;">

<form action="http://localhost/php/nd/webMechanika3.php" method="get">

    <input type="text" name="color"/>
    <button type="submit">Pasirink spalva</button>

</form>

</body>
</html>