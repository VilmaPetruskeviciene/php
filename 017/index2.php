<?php

$cat = 'Murka';

//POST scenarijus
if('POST' == $_SERVER['REQUEST_METHOD']) {

    $ra = $_POST['rapolas'] ?? 'Nieko nera';

    header("Location: http://localhost/php/017/");
    die;
}

//GET scenarijus

$ra2 = $_GET['rapolas2'] ?? 'Nieko nera';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017</title>
</head>
<body>

    <h1><?= $ra2 ?></h1>

    <a href="http://localhost/php/017/"><?= $cat ?></a>

    <form action="http://localhost/php/017/" method="post">

        <input type="text" name="rapolas"/>
        <button type="submit">Tikras</button>
        
    </form>

    <form action="http://localhost/php/017/" method="get">

        <input type="text" name="rapolas2"/>
        <button type="submit">Tikras2</button>

    </form>

    
    
</body>
</html>