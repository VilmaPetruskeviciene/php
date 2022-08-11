<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document 01</title>
</head>
<body style="background:<?= isset($_GET['color']) ? 'crimson' : 'black'  ?>">
    <div class="two-links">
    <a href="http://localhost/php/018/01.php">BE</a>
    <a href="http://localhost/php/018/01.php?color=1">SU</a>
    </div>
</body>
</html>