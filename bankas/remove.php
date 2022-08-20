<?php
if(isset($_GET)) {
    $index = $_GET['index'];
}

$message = '';
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $cash = $_POST['minus'];
    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach($data as $i => $val) {
        if($index == $i) {
            if (empty($cash)) {
                $message = 'Įveskite sumą.';
            } else if ($val['likutis'] < $cash) {
                $message = 'Nepakankamas likutis sąskaitoje.';
            }     
            else if($val['likutis'] >= $cash) {
                $data[$i]['likutis'] -= $cash;
                file_put_contents(__DIR__ . '/data.json', json_encode($data), 1);
                header('Location: ./removeMessage.php');
                die;
            } 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuskaičiuoti lėšas</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="bg-main">
        <nav class="nav">
            <a class="btn btn-nav" href="./index.php">Pradžia</a>
            <a class="btn btn-nav" href="./sarasas.php">Visos sąskaitos</a>
            <a class="btn btn-nav" href="./newAccount.php">Atidaryti naują sąskaitą</a>
        </nav>
        <div class="user-new">
            <h1 class="text">Nuskaičiuoti lėšas:</h1>
            <form action="" method="post">
                <div class="red"><?= $message ?></div>
                <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'), 1) as $i => $val) : ?>
                <?php if($i == $index) :?>
                <h2 class="text"><?= $val['iban'] ?></h2>
                <h3 class="text"><?= $val['vardas'] .' '. $val['pavarde'] ?></h3>
                <p class="text">Asmens kodas: <?= $val['ak'] ?></p>
                <p class="text">Sąskaitos balansas: <?= $val['likutis'] ?> eur.</p>   
                <?php endif ?>
                <?php endforeach ?>
                <input class="input" type="text" name="minus">
                <div>
                    <button class="btn-2 btn-ok" href="./removeMessage.php" type="submit">Nuskaičiuoti lėšas</button>
                </div>
            </form>
        </div>
    </section>     
</body>
</html>