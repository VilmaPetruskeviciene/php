<?php

$vardas = $pavarde = $ak = '';
$message = ['ak' => '', 'vardas' => '', 'pavarde' => ''];

if(isset($_POST['submit'])) {

    if(strlen($_POST['ak']) != 11) {
        $message['ak'] = 'Neteisingas asmens kodo formatas!';   
    } else {
        $ak = $_POST['ak'];
    }

    if(strlen($_POST['vardas']) < 3) {
        $message['vardas'] = 'Vardas yra per trumpas!'; 
    } else {
        $vardas = $_POST['vardas'];
    }

    if(strlen($_POST['pavarde']) < 3) {
        $message['pavarde'] = 'Pavarde yra per trumpa!'; 
    } else {
        $pavarde = $_POST['pavarde'];
    }

    $data = json_decode(file_get_contents(__DIR__ .'/data.json'), 1);

    $idUnique = true;

    foreach($data as $val) {
        if($val['ak'] == $_POST['ak']) {
            $idUnique = false;
        }
    }

    if($idUnique && !array_filter($message)) {
        
        $iban = $_POST['iban'];
        $ak = $_POST['ak'];
    
        $newUser = [
            'vardas'=> $vardas,
            'pavarde' => $pavarde,
            'iban' => $iban,
            'ak' => $ak,
            'likutis' => 0
        ];
    
        $data[] = $newUser;
    
        file_put_contents(__DIR__ .'/data.json', json_encode($data));
        header("Location: ./okMessage.php");
        die();
    } else {
        $message['ak'] = 'Toks asmens kodas jau yra!';  
    }
}

function newIban() {
    $ibanNumber = 'LT';
    for($i = 0; $i < 18; $i++){
        $number = rand(0, 9);
        $ibanNumber .= $number;
    }
    return $ibanNumber;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja sąskaita</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="bg-main">
        <nav class="nav">
            <a class="btn btn-nav" href="./index.php">Pradžia</a>
            <a class="btn btn-nav" href="./sarasas.php">Visos sąskaitos</a>
        </nav>
        <div class="user-new">
            <h1 class="text">Nauja sąskaita</h1>
            <form class="form" action="newAccount.php" method="POST">
                <label class="label">Vardas:</label>
                <input class="input" type="text" name="vardas" value="<?php echo $vardas; ?>" required>
                <div class="red"><?php echo $message['vardas']; ?></div>
                <label class="label">Pavardė:</label>
                <input class="input" type="text" name="pavarde" value="<?php echo $pavarde; ?>" required>
                <div class="red"><?php echo $message['pavarde']; ?></div>
                <label class="label">Sąskaitos numeris:</label>
                <input class="input" type="text" name="iban" value="<?=newIban()?>" readonly required>
                <label class="label">Asmens kodas:</label>
                <input class="input" type="number" name="ak" value="<?php echo $ak; ?>" required>
                <div class="red"><?php echo $message['ak']; ?></div>
                <input class="btn-2 btn-ok" type="submit" name="submit" value="Sukurti sąskaitą">
            </form>
        </div>
    </section>
</body>
</html>