<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Animals List</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($animals as $animal) : ?>
                        <li class="list-group-item"><?= $animal['type'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');