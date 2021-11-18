<?php

namespace App\Controllers;


use App\Models\ModelAdmin;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Home',
        ];
        return view('v_home', $data);
    }
    public function Register()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Home',
        ];
        return view('v_register', $data);
    }
}
