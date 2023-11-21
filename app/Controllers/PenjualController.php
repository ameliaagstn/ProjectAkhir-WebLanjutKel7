<?php

namespace App\Controllers;

use App\Models\PenjualModel;

class PenjualController extends BaseController
{
    protected $penjualModel;
    public function __construct()
    {
        $this->penjualModel = new PenjualModel();
    }

    public function index()
    {
        //
    }

    public function dashboard(){
        return view('penjual/dashboard_penjual');
    }
    
    public function profile(){
        $data['penjuals'] = $this->penjualModel->getPenjual();

        return view('penjual/profile_penjual', $data);
    }

    public function edit($id){
        $penjual = $this->penjualModel->getPenjual($id);
    
        $data = [
            'title' => 'Edit Penjual',
            'penjual' => $penjual, // Ensure to pass $penjual to the view
        ];
    
        return view('penjual/edit_penjual', $data);
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
    
                $result = $this->penjualModel->updatePenjual($data, $id);
    
                if(!$result){
                    return redirect()->back()->withInput()
                    ->with('error', 'Gagal menyimpan data');
                }
    
                return redirect()->to(base_url('/profile_penjual'));
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
