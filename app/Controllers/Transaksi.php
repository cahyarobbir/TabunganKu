<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    function tambahPage()
    {
        $data['title'] = 'Tambah Transaksi';
        return view('Templates/header', $data)
            . view('Pages/TambahTransaksi')
            . view('Templates/footer');
    }

    function tambahTransaksi()
    {
        redirect()->to(base_url());
    }
}
