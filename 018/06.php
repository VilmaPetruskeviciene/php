<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="background:<?= $_SERVER['REQUEST_METHOD'] == 'POST' ? '#FAFA33' : 'lime' ?>">

    <h1 contenteditable="true">Labas</h1>


    <div class="two-links">
    <form action="http://localhost/php/018/06.php" method="get">
        <button type="submit">GET</button>
    </form>
    </div>

    <div class="two-links">
    <form action="http://localhost/php/018/06.php" method="post">
        <button type="submit">POST</button>
    </form>
    </div>
    
</body>
</html>