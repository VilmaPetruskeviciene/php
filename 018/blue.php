<?php
if (isset($_GET['go'])) {
    header('Location: http://localhost/php/018/red.php');
    die;
}
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
<body style="background:skyblue">

    <div class="two-links">
    <a href="http://localhost/php/018/blue.php?go">GO</a>
    </div>
    
</body>
</html>