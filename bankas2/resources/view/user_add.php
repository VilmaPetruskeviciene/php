<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Pridėti lėšų</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>/users/addUpdate/<?= $user['id'] ?>" method="post">
                        <div class="form-group">
                            <label>Vardas:</label>
                            <input type="text" class="form-control" name="vardas" value="<?= $user['vardas']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Pavardė:</label>
                            <input type="text" class="form-control" name="pavarde" value="<?= $user['pavarde']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Sąskaitos numeris:</label>
                            <input type="text" class="form-control" name="iban" value="<?= $user['iban']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Asmens kodas:</label>
                            <input type="text" class="form-control" name="ak" value="<?= $user['ak']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Pinigų likutis:</label>
                            <input type="text" class="form-control" name="likutis" value="<?= $user['likutis']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Pridedama:</label>
                            <input type="text" class="form-control" name="addMoney">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Pridėti lėšų</button>
                    </form>    
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
App\App::view('bottom');