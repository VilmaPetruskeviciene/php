<?php 
if(isset($_GET)) {
    $index = $_GET['index'];
}
$message = '';
    $data = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);
    foreach($data as $i => $val) {
        if($i == $index) {
            if ($val['likutis'] == 0) {
                unset($data[$i]);
                //$data = array_values($data);          
                $message = 'Sąskaita ištrinta.';
                file_put_contents(__DIR__ . '/data.json', json_encode($data));
            } else {
                $message = 'Sąskaitoje yra pinigų.';
            }
        }
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
            <a class="btn btn-nav" href="./sarasas.php">Visos sąskaitos</a>
            <a class="btn btn-nav" href="./newAccount.php">Atidaryti naują sąskaitą</a>
        </nav>
        <div class="pig">
            <h3 class="del"><?= $message ?></h3>
        </div>      
    </section>   
</body>
</html>