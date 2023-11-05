<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('dashboard');
    }
  
    public function login(){
        return view('login_user');
    }

    public function register(){
        return view('daftar');
    }
}
