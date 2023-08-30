<div class="container mt-5">
    <h1>
        Hai, <?= $user['nama'] ?>
    </h1>
    <div class="card text-center mt-5">
        <div class="card-header">
            Saldo
        </div>
        <div class="card-body">
            <h1 class="card-title mb-5 mt-5">Rp. <?= $user['saldo'] ?></h1>
            <a href="#" class="btn btn-primary">Lihat Saldo</a>
        </div>
        <div class="card-footer text-muted">
            Tabunganku
        </div>
    </div>

    <div class="button-action mt-5 d-flex flex-row gap-3 justify-content-end">
        <a href="<?= base_url('tambah') ?>"><button class="btn btn-primary btn-lg">Tambah Transaksi</button></a>
        <button class="btn btn-success btn-lg">Pemasukan</button>
        <button class="btn btn-danger btn-lg">Pengeluaran</button>
        <button class="btn btn-secondary btn-lg">Riwayat</button>
    </div>

    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nominal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Sisa Saldo</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>10-10-2010</td>
                <td>Rp. 5000</td>
                <td>Pengeluaran</td>
                <td>Rp. 5000</td>
                <td>
                    <button class="btn btn-warning">
                        Ubah
                    </button>
                    <button class="btn btn-danger">
                        Hapus
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>