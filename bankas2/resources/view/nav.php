<div class="container">
    <div class="row">
        <div class="col-12">

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>/users">Users List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>/users/create">New User</a>
                </li>
                <?php if(App\Middlewares\Auth::isLoged()) : ?>
                <li class="nav-item">
                    <div class="user-nav">
                        <div class="name"><?= $_SESSION['user']['name'] ?></div>
                        <form action="<?= URL ?>/logout" method="post">
                            <button type="submit" class="btn btn-outline-danger m-2">Logout</button>
                        </form>
                    </div>
                </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/login">Login</a>
                    </li>
                <?php endif ?>
            </ul>

        </div>
    </div>
</div>