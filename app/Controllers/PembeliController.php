<?php

namespace App\Controllers;

use App\Models\PembeliModel;

class PembeliController extends BaseController
{
    protected $pembeliModel;
    public function __construct()
    {
        $this->pembeliModel = new PembeliModel();
    }

    public function index()
    {
        //
    }

    public function dashboard(){
        return view('pembeli/dashboard_pembeli');
    }
    
    public function profile(){
        $data['pembelis'] = $this->pembeliModel->getPembeli();

        return view('pembeli/profile_pembeli', $data);
    }

    public function edit($id){
        $pembeli = $this->pembeliModel->getPembeli($id);
    
        $data = [
            'title' => 'Edit Pembeli',
            'pembeli' => $pembeli,
        ];
    
        return view('pembeli/edit_pembeli', $data);
    }
    
    public function update($id){
        $path = 'assets/upload/img';
        $foto = $this->request->getFile('user_image');
    
        if ($foto->isValid()){
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)){
                $foto_path = base_url($path . '/' . $name);
    
                $data = [
                    'username' => $this->request->getVar('username'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'email' => $this->request->getVar('email'),
                    'alamat' => $this->request->getVar('alamat'),
                    'user_image' => $foto_path, 
                ];
    
                $result = $this->pembeliModel->updatePembeli($data, $id);
    
                if(!$result){
                    return redirect()->back()->withInput()
                    ->with('error', 'Gagal menyimpan data');
                }
    
                return redirect()->to(base_url('/profile_pembeli'));
            } else {
                return redirect()->back()->withInput()
                    ->with('error', 'Gagal upload gambar');
            }
        } else {
            return redirect()->back()->withInput()
                ->with('error', 'File tidak valid');
        }
    }
    
}