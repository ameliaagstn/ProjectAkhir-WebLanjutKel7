<?php

namespace App\Controllers;

use App\Models\KeranjangModel;
use App\Controllers\BaseController;
use SebastianBergmann\Timer\Duration;

class PembeliController extends BaseController
{

    public $db;
    public $builder;
    public function index()
    {
        //
    }

    public function pembeli(){
        return view('pembeli/profile_pembeli');
        }

    public function dashboard(){
            return view('pembeli/dashboard');
        }


        //Ini Controller Buat Keranjang
        public function keranjang(){
            $KeranjangModel = new KeranjangModel();
            $data = [
                'keranjang' => $KeranjangModel->getKeranjang()
                    ];
            // dd($data);
            return view('pembeli/keranjang', $data);
        }

        public function update($id){
            $KeranjangModel = new KeranjangModel();

            $data = [
                'nama_barang' => $this->request->getVar('nama_barang'),
                'jumlah' => $this->request->getVar('jumlah'),
                'total_harga' => $this->request->getVar('total_harga'),
            ];
            $KeranjangModel->update($id, $data);
            return redirect()->to('/pembeli/keranjang');
        }


        public function deleteKeranjang($id)
        {
            $db = \Config\Database::connect();
            $builder = $db->table('keranjang');
            $builder->where('id', $id);
            $builder->delete();
            return redirect()->to(base_url('/pembeli/keranjang'));
        }

        public function shop(){
            return view('pembeli/shop');
        }

}
