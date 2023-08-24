<div class="container mt-5">
    <form class="d-flex flex-column gap-4" method="post" action="<?php echo base_url('login') ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <?= anchor(base_url('registrasi'), 'Belum Punya Akun?') ?>
</div>