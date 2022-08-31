<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>login" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
App\App::view('bottom');