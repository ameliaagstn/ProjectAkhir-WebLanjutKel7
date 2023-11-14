<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price'];

    // Metode untuk mendapatkan data produk
    public function getProduct($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    // Metode untuk menambahkan data produk
    public function insertProduct($data)
    {
        return $this->insert($data);
    }

    // Metode untuk mengupdate data produk
    public function updateProduct($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data produk
    public function deleteProduct($id)
    {
        return $this->delete($id);
    }
}