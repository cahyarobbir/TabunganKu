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
        return redirect()->to(base_url());
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
