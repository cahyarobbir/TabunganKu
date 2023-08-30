<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $userData = session()->get('user');
        $data['title'] = "Home";
        $data['user'] = $userData;
        return view('Templates/Header', $data)
            . view('Pages/Home')
            . view('Templates/Footer');
    }
}
