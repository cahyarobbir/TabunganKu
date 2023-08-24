<?php

namespace app\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{

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
