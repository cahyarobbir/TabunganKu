<div class="container mt-5">

    <form class="d-flex flex-column gap-4" method="post" action="login">

        <?php if (session()->has('validation')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('validation')->listErrors() ?>
            </div>
        <?php endif; ?>

        <?php if (session()->has('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('error') ?>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    <?= anchor(base_url('registrasi'), 'Belum Punya Akun?') ?>
</div>