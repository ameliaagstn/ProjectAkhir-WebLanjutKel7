<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PenjualController extends BaseController
{
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('penjual/dashboard_penjual');
    }
    

}
