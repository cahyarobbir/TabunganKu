<?php

namespace app\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = model(UserModel::class);
    }

    function loginPage()
    {
        $data['title'] = 'Login';
        return view('Templates/Header', $data)
            . view('Auth/Login')
            . view('Templates/Footer');
    }

    function login()
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus di isi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus di isi'
                ]
            ]
        ];



        if (!$this->validate($rules)) {
            echo "Debugging: This message should appear.";
            return redirect()->to('login')->withInput()->with('validation', $this->validator);
        }

        $nama = $this->request->getVar('nama');
        $password = $this->request->getVar('password');

        $data = $this->model->login($nama);

        if ($data && password_verify($password, $data['password'])) {
            return redirect()->to(base_url());
        } else {
            return redirect()->to('login')->withInput()->with('error', 'Nama atau Password salah');
        }
    }

    function registrasi()
    {
        $rules = [
            'nama' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return $this->registrasiPage();
        }
        $data = [
            'nama' => $this->request->getVar('nama'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $this->model->registrasi($data);
        return redirect()->to(base_url());
    }

    function registrasiPage()
    {
        $data['title'] = 'Registrasi';
        return view('Templates/Header', $data)
            . view('Auth/Registrasi')
            . view('Templates/Footer');
    }
}
