<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            One of three columns
        </div>
        
    </div>
</div>

<?php
App\App::view('bottom');