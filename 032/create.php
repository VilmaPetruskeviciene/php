<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $host = '127.0.0.1';
    $db   = 'del_finu';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, $user, $pass, $options);

    // INSERT INTO table_name (column1, column2, column3, ...)
    // VALUES (value1, value2, value3, ...);

    $sql = "
        INSERT INTO `trees`
        (`type`, `height`, `title`)
        VALUES (?, ?, ?)
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['type'], $_POST['height'], $_POST['title']]);

    header('Location: http://localhost/php/032/');
    die;
}

?>

<form action="" method="post">
    Title: <input type="text" name="title"> </br></br>
    Height: <input type="text" name="height"> </br></br>
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palme</option>
    </select> </br></br>
    <button type="submit">Plant it</button>
</form>