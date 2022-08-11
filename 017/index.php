<?php

$cat = 'Murka';

if (!file_exists(__DIR__ . '/data.json')) {
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}

//POST scenarijus
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $ra = $_POST['rapolas'] ?? 'Nieko nera';

    $data = json_decode(file_get_contents(__DIR__ . '/data.json', 1));
    $data[] = $ra;
    file_put_contents(__DIR__ . '/data.json', json_encode($data));

    header("Location: http://localhost/php/017/");
    die;
}

//GET scenarijus

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

    <a href="http://localhost/php/017/"><?= $cat ?></a>

    <form action="http://localhost/php/017/" method="post">

        <input type="text" name="rapolas"/>
        <button type="submit">Tikras</button>
        
    </form>
        <ul>
        <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $val) : ?>
            <li><?= $val ?></li>
        <?php endforeach ?>
        </ul>
    
</body>
</html>