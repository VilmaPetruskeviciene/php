<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>New User</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>/users/store" method="post">
                        <div class="form-group">
                            <label>Vardas:</label>
                            <input type="text" class="form-control" name="vardas" value="<?= $_POST['vardas'] ?? ''?>" required>
                        </div>
                        <div class="form-group">
                            <label>Pavardė:</label>
                            <input type="text" class="form-control" name="pavarde" value="<?= $_POST['pavarde'] ?? ''?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="iban" hidden>
                        </div>
                        <div class="form-group">
                            <label>Asmens kodas:</label>
                            <input type="text" class="form-control" name="ak" value="<?= $_POST['ak'] ?? ''?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="likutis" class="form-control" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Sukurti sąskaitą</button>
                    </form>    
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php
App\App::view('bottom');