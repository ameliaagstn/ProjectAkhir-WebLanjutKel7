<?php

namespace App\Models;

use CodeIgniter\Model;

class BuyerModel extends Model
{
    protected $table = 'buyer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'address', 'phone'];

    // Metode untuk mendapatkan data pembeli
    public function getBuyer($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    // Metode untuk menambahkan data pembeli
    public function insertBuyer($data)
    {
        return $this->insert($data);
    }

    // Metode untuk mengupdate data pembeli
    public function updateBuyer($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data pembeli
    public function deleteBuyer($id)
    {
        return $this->delete($id);
    }
}