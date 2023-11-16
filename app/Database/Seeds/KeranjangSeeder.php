<?php

namespace App\Database\Seeds;

use App\Models\KeranjangModel;
use CodeIgniter\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    public function run()
    {
        $KeranjangModel = new keranjangModel();

        $KeranjangModel->save([
            'nama_barang'   => 'Guci Firaun'
        ]);

    }
}
