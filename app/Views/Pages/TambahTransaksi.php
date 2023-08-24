<div class="container mt-5">
    <form class="d-flex flex-column gap-4" action="<?php echo base_url('auth/login') ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nominal</label>
            <input type="text" class="form-control" placeholder="Rp. ">
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Pemasukan</option>
            <option value="2">Pengeluaran</option>
        </select>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>