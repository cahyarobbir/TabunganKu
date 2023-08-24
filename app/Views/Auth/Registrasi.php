<div class="container mt-5">
    <form class="d-flex flex-column gap-4" method="post" action="<?php echo base_url('registrasi') ?>">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="Text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Registrasi</button>
    </form>
    <?= anchor(base_url('login'), 'Kembali ke Login') ?>
</div>