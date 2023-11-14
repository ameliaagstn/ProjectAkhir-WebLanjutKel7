<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function register(){
        return view('daftar');
    }


    public function login(){
        return view('login_user');
    }

}
