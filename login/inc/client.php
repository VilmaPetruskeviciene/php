<?php
view('top');

?>

<?php if(isLogged()) : ?>

    <h2>Labas, <?= $_SESSION['user']['name'] ?></h2>
    <?php  view('logout') ?>

<?php else : ?>

    <a href="<?= DIR ?>login">Login HERE</a>

<?php endif ?>


<h1>Sveiki atvykę į mūsų puslapį</h1>

<?php
view('bottom');
