<?php

// echo '<pre>';

// print_r($_POST);

// die;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checked = count($_POST['c'] ?? []);
    header('Location: http://localhost/php/018/09.php?all='.$checked );
    die;
}

$color = isset($_GET['all']) ? 'white' : 'black';
$aj = range('A', 'J');
$count = rand(3, 10);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body style="background:<?= $color ?>">
<?php if(isset($_GET['all'])): ?>
<a href="http://localhost/php/018/09.php">BACK</a>
<h1> ALL CHECKED IS : <?= $_GET['all'] ?></h1>

    <?php else: ?>   
    <div class="two-links">
        <form action="http://localhost/php/018/09.php" method="post">

            <?php foreach(range(1, $count) as $number): ?>
            <input type="checkbox" name="c[]" value="<?= $aj[$number-1] ?>" /><?= $aj[$number-1] ?>
            <?php endforeach ?>

            <button type="submit">GO</button>
        </form>
    </div>

<?php endif ?>

</body>

</html>