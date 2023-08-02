<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Master extends BaseController
{
    public function login()
    {
        return view('master/login');
    }
    public function penerima()
    {
        return view('master/penerima');
    }
}
