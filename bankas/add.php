<?php
if(!empty($_POST)){

    $data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);

    if(array_key_exists('sum', $_POST)) {
        foreach($data as &$value) {
            if($value['iban'] == $_POST['iban']) {
                $value['likutis'] += $_POST['sum'];
            }
        }

        file_put_contents(__DIR__ .'/data.json', json_encode($data));

        header("Location: ./addMessage.php?iban=".$_POST['iban']."");
        die();
    }

    $input = '<form action="./add.php" method="post">
            <input class="input" type="text" name="sum">
            <input type="hidden" name="vardas" value="'.$_POST['vardas'].'">
            <input type="hidden" name="pavarde" value="'.$_POST['pavarde'].'">
            <input type="hidden" name="iban" value="'.$_POST['iban'].'">
            <input type="hidden" name="ak" value="'.$_POST['ak'].'">
            <input type="hidden" name="likutis" value="'.$_POST['likutis'].'">
            <button class="btn-2 btn-ok" type="submit">Papildyti sąskaitą</button>
            </form>';

    $renderRow = '<div>
                <h2 class="text">'.$_POST['iban'].'</h2>
                <h3 class="text">'.$_POST['vardas'].' '.$_POST['pavarde'].'</h3>
                <p class="text">Asmens kodas: '.$_POST['ak'].'</p>
                <p class="text">Likutis: '.$_POST['likutis'].'</p>
                <div>'.$input.'</div>
                </div>';

}

if(!empty($_GET)){

    $data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);
    $selected = [];

    foreach($data as $array){

        if($_GET['iban'] == $array['iban']){
            $accounts = $array; 
        }

    }

    $input = '<form action="./add.php" method="post">
            <input class="input" type="text" name="sum" min="0">
            <input type="hidden" name="vardas" value="'.$accounts['vardas'].'">
            <input type="hidden" name="pavarde" value="'.$accounts['pavarde'].'">
            <input type="hidden" name="iban" value="'.$accounts['iban'].'">
            <input type="hidden" name="ak" value="'.$accounts['ak'].'">
            <input type="hidden" name="likutis" value="'.$accounts['likutis'].'">
            <button class="btn-2 btn-ok" type="submit">Papildyti sąskaitą</button>
            </form>';


    $renderRow = '<div>
                <h2 class="text">'.$accounts['iban'].'</h2>
                <h3 class="text">'.$accounts['vardas'].' '.$accounts['pavarde'].'</h3>
                <p class="text">Asmens kodas: '.$accounts['ak'].'</p>
                <p class="text">Likutis: '.$accounts['likutis'].'</p>
                <div>'.$input.'</div>
                </div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papildyti sąskaitą</title>
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
            <h1 class="text">Papildyti sąskaitą:</h1>
   
            <?=$renderRow ?? '' ?>

        </div>
    </section>   
</body>
</html>