<?php

App\App::view('top', ['title' => $title]);

?>

<h1> <?= $welcome ?> </h1>

<?php

App\App::view('bottom');