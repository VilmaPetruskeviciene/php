<?php
$data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);

function mySort($arr) {
    $sarasas;
    do {
        $sarasas = false;
        for($i = 0; $i < count($arr)-1; $i++){
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

$accounts = mySort($data);

$bankUser = '';

function generateAdd ($vardas, $pavarde, $iban, $ak, $likutis) {
    return '<form action="./add.php" method="post">
            <input type="hidden" name="vardas" value="'.$vardas.'">
            <input type="hidden" name="pavarde" value="'.$pavarde.'">
            <input type="hidden" name="iban" value="'.$iban.'">
            <input type="hidden" name="ak" value="'.$ak.'">
            <input type="hidden" name="likutis" value="'.$likutis.'">
            <button class="btn-2 btn-ok" type="submit">Pridėti lėšų</button>
            </form>';           
}

function generateRemove ($vardas, $pavarde, $iban, $ak, $likutis){
    return '<form action="./remove.php" method="post">
            <input type="hidden" name="vardas" value="'.$vardas.'">
            <input type="hidden" name="pavarde" value="'.$pavarde.'">
            <input type="hidden" name="iban" value="'.$iban.'">
            <input type="hidden" name="ak" value="'.$ak.'">
            <input type="hidden" name="likutis" value="'.$likutis.'">
            <button class="btn-2 btn-ok" type="submit">Nuskaičiuoti lėšas</button>
            </form>';
}

function deleteAccount ($iban) {
    return '<form action="./delete.php" method="post">
            <input type="hidden" name="delete" value="'.$iban.'">
            <button class="btn-2 btn-delete" type="submit">Ištrinti sąskaitą</button>
            </form>';
}

foreach($accounts as $val) {
    $row = "<div class='user'>
            <h2 class='text'>".$val['iban']."</h2>
            <h3 class='text'>".$val['vardas']." ".$val['pavarde']."</h3>
            <p class='text'>Asmens kodas: ".$val['ak']."</p>
            <p class='text'>Sąskaitos balansas: ".$val['likutis']." eur</p>
            <div class ='action'>".generateAdd($val['vardas'], $val['pavarde'], $val['iban'], $val['ak'], $val['likutis'])." ".generateRemove($val['vardas'], $val['pavarde'], $val['iban'], $val['ak'], $val['likutis'])." ".deleteAccount ($val['iban'])."</div>
            </div>";
    
    $bankUser .= $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bank</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="bg-main">
        <nav class="nav">
            <a class="btn btn-nav" href="./index.php">Pradžia</a>
            <a class="btn btn-nav" href="./newAccount.php">Atidaryti naują sąskaitą</a>
        </nav>

        <?=$bankUser?>       
    </section>
</body>
</html>