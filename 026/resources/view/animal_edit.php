<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Edit Animal</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>animals/update/<?= $animal['id'] ?>" method="post">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="type" value="<?= $animal['type'] ?>">
                            <small class="form-text text-muted">Animal type</small>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight" value="<?= $animal['weight'] ?>">
                            <small class="form-text text-muted">Animal weight in kg</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="tail" <?= $animal['tail'] ? 'checked' : '' ?>>
                            <label class="form-check-label">Has tail?</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
App\App::view('bottom');