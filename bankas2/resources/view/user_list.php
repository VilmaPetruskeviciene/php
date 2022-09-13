<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Users List</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($users as $user) : ?>
                        <li class="list-group-item">
                            <div class="line">
                                <div class="line_content">
                                    <div class="line_content_vardas"><?= $user['vardas'] ?> <?= $user['pavarde'] ?></div>
                                    <div class="line_content_ak">a/k <?= $user['ak'] ?></div>
                                    <div class="line_content_iban">Sąskaita: <?= $user['iban'] ?></div>
                                    <div class="line_content_likutis">Likutis: <?= $user['likutis'] ?> EUR</div>
                                </div>
                                <div class="line_buttons">
                                    <a href="<?= URL.'/users/add/'.$user['id'] ?>" type="button" class="btn btn-outline-success m-2">Pridėti lėšų</a>
                                    <button type="button" class="btn btn-outline-warning m-2">Nuskaičiuoti lėšas</button>
                                    <button type="button" class="btn btn-outline-danger m-2">Ištrinti sąskaitą</button>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
App\App::view('bottom');