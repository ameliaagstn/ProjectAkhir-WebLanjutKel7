<?php

namespace App\Database\Seeds;

use App\Models\BarangModel;
use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $BarangModel = new BarangModel();

        $BarangModel->save([
            'nama_barang'   => 'Telephone kuno',
            'deskripsi'     => 'Telephone ini diciptakan oleh alexander grahambell',
            'harga'         => '1500000',
        ]);
    }
}
