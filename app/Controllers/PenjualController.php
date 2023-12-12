<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\PenjualModel;

// class PenjualController extends BaseController
// {
//     ;

//     public function __construct()

class PenjualController extends BaseController
{
    public $barangModel;

    // public function __construct();
    // use App\Models\PenjualModel;
    protected $penjualModel;
    public function __construct()
    {
        $this->penjualModel = new PenjualModel();
    }

    public function index()


    {
        $this->barangModel = new BarangModel();
    }

    // public function index()
    // {
    //     //
    // }

    public function penjual(){
        return view('penjual/profile_penjual');
    }

    public function dashboard(){
        return view('penjual/dashboard_penjual');
    }

    // public function list_barang(){
    //     return view('penjual/list_barang');
    // }
    
 
    public function create()
    {   
        $barang = $this->barangModel->getBarang();

        $data =[
            'title'=>'Create Barang',    
            'barang' => $barang,        
        ];
        return view('penjual/create_barang', $data);
    }

    public function edit($id){
        $barang = $this->barangModel->getBarang($id);

        $data = [
            'title' => 'Edit Barang',
            'barang' => $barang,
        ];

        return view('penjual/edit_barang', $data);
    }

    public function show($id){
        $barang = $this->barangModel->getBarang($id);

        $data = [
            'title' => 'Barang',
            'barang' => $barang,
        ];

        return view('penjual/list_barang', $data);
    }

    public function destroy($id){
        $result = $this->barangModel->deleteBarang($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus barang');
        }
        return redirect()->to(base_url('penjual/list_barang'))
        ->with ('success', 'Berhasil menghapus barang');
    }

    public function store(){
        if($this->request->getVar('nama_barang') != ''){
            $barang_select = $this->barangModel->where('id', $this->request->getVar('nama_barang'))->first();
            $nama_barang = $barang_select['nama_barang'];
        }else{
            $nama_barang = '';
        }

        // validation
        if(!$this->validate([
            'nama_barang' => 'required|alpha_space',
            'id' => 'required|is_unique[barang.id]|integer|min_length[5]',
        ])){

            session()->setFlashdata('nama_barang');
            return redirect()->back()->withInput()->with('nama_barang', $nama_barang);
        }

        // save data
        $this->barangModel->saveBarang([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'id' => $this->request->getVar('id'),
            'harga' => $this->request->getVar('harga'),
        ]);

        // show to profile page...
        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'id' => $this->request->getVar('id'),
            // 'nama_barang' => $nama_barang,
            'title' => 'Barang'
        ];
        // return view('profile', $showed_data);
        return redirect()->to('/penjual/dashboard_penjual');
    }

    public function update($id){
        if($this->request->getVar('nama_barang') != ''){
            $barang_select = $this->barangModel->where('id', $this->request->getVar('nama_barang'))->first();
            $nama_barang = $barang_select['barang'];
        }else{
            $nama_barang = '';
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'id' => $this->request->getVar('id'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
        ];

        if ($foto->isValid()){
            $name = $foto->getRandomName();
            //up img

            if($foto->move($path, $foto)){
                $foto_path = base_url($path.$name);

                $data['foto'] = $foto_path;

            }
        }

        $result = $this->barangModel->updateBarang($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('penjual/list_barang');
    }

    public function profile(){
        $data['penjuals'] = $this->penjualModel->getPenjual();

        return view('penjual/profile_penjual', $data);
    }

    public function edit_profile($id){
        $penjual = $this->penjualModel->getPenjual($id);
    
        $data = [
            'title' => 'Edit Penjual',
            'penjual' => $penjual, // Ensure to pass $penjual to the view
        ];
    
        return view('penjual/edit_penjual', $data);
    }
    
    public function update_profile($id){
        $path = 'assets/upload/img';
        $foto = $this->request->getFile('user_image');
    
        if ($foto->isValid()){
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)){
                $foto_path = base_url($path . '/' . $name);
    
                $data = [
                    'username' => $this->request->getVar('username'),
                    'nama' => $this->request->getVar('nama'),
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

