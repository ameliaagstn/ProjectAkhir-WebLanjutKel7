<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PembeliController extends BaseController
{
    public function index()
    {
        //
    }

    public function pembeli(){
        return view('pembeli/profile_pembeli');
        }

    public function dashboard(){
            return view('pembeli/dashboard_pembeli');
        }
}
