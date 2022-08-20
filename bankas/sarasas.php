<?php
$data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);

function mySort($arr) {
    $sarasas;
    do {
        $sarasas = false;
        for($i = 0; $i < count($arr)-1; $i++) {
            $pirmas = ord($arr[$i]['pavarde'][0]);
            $antras = ord($arr[$i+1]['pavarde'][0]);

            if($pirmas > $antras) {
                $a = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $a;
                $sarasas = true;
            }
        }
    } while($sarasas);
    return $arr;
}

$message = '';
if(empty($data)) {
    $message = 'Neatidaryta nė viena sąskaita.';
} else { 
    $data = mySort($data);
    file_put_contents(__DIR__ . '/data.json', json_encode($data), 1);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bank</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="bg-main">
        <nav class="nav">
            <a class="btn btn-nav" href="./index.php">Pradžia</a>
            <a class="btn btn-nav" href="./newAccount.php">Atidaryti naują sąskaitą</a>
        </nav>
        <p><?=$message?></p>
        <div class='user'>
        <?php foreach($data as $index => $val): ?>
            <div class="user1">
            <form method="get">
                <h2 class="text"><?= $val['iban'] ?></h2>
                <h3 class="text"><?= $val['vardas'] .' '. $val['pavarde'] ?></h3>
                <p class="text">Asmens kodas: <?= $val['ak'] ?></p>
                <p class="text">Sąskaitos balansas: <?= $val['likutis'] ?> eur.</p>   
                <div class ='action'>
                    <a class="btn-2 btn-ok" href="./add.php?index=<?= $index ?>">Pridėti lėšų</a>
                    <a class="btn-2 btn-ok" href="./remove.php?index=<?= $index ?>">Nuskaičiuoti lėšas</a>
                    <a class="btn-2 btn-delete" href="./bankas/delete.php?index=<?= $index ?>">Ištrinti sąskaitą</a>
                </div> 
            </form>
            </div>
            <?php endforeach ?>
        </div>     
    </section>
</body>
</html>