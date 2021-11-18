<?php

namespace App\Controllers;


use App\Models\ModelAdmin;

class Register extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Home',
        ];
        return view('v_register', $data);
    }
}
