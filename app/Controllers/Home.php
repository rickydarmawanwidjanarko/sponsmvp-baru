<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Home',
        ];
        return view('v_home', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Register',
        ];
        return view('v_register', $data);
    }
}
