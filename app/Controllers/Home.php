<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        if (logged_in()) {
            if (in_groups('admin')) {
                return view('admin/profile_admin');
            } else if (in_groups('penjual')) {
                return view('petugas/dashboard_penjual');
            } else if (in_groups('pembeli')) {
                return view('pemilih/dashboard');
            }
        } else {
            return view('welcome_message');

        }
    }
  
    // public function daftar(){
    //     return view('daftar');
    // }

    
}
