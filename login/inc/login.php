<?php
view('top');

?>

<fieldset>
    <legend>Login</legend>
    <form action="<?= URL . 'login' ?>" method="post">
        Name: <input type="text" name="name" />
        Password: <input type="password" name="psw" />
        <button type="submit">Login</button>
    </form>
</fieldset>



<?php

view('bottom');