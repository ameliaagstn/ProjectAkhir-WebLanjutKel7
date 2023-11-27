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
            'nama_barang'   => 'Guci Firaun',
            'jumlah'   => '1',
            'total_harga'   => '1000000',
        ]);

        $KeranjangModel->save([
            'nama_barang'   => 'sendok Christopher Columbus',
            'jumlah'   => '1',
            'total_harga'   => '10222',
        ]);

        $KeranjangModel->save([
            'nama_barang'   => 'Bantal hitler',
            'jumlah'   => '1',
            'total_harga'   => '120922',
        ]);

    }
}
