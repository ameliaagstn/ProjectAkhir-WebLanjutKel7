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

    public function admin(){
    return view('profile_admin');
    }

    public function pembeli(){
        return view('profile_pembeli');
        }
}
