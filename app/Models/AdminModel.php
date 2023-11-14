<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'address', 'phone'];

    // Metode untuk mendapatkan data admin
    public function getAdmin($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    // Metode untuk menambahkan data admin
    public function insertAdmin($data)
    {
        return $this->insert($data);
    }

    // Metode untuk mengupdate data admin
    public function updateAdmin($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data admin
    public function deleteAdmin($id)
    {
        return $this->delete($id);
    }

    // Metode untuk mendapatkan data pembeli
    public function getBuyer()
    {
        // Sesuaikan dengan struktur dan nama tabel pembeli
        return $this->db->table('buyer')->get()->getResultArray();
    }

    // Metode untuk mendapatkan data laporan keuangan
    public function getFinancial()
    {
        // Sesuaikan dengan struktur dan nama tabel laporan keuangan
        return $this->db->table('financial')->get()->getResultArray();
    }

    // Metode untuk mendapatkan data produk
    public function getProduct()
    {
        // Sesuaikan dengan struktur dan nama tabel produk
        return $this->db->table('product')->get()->getResultArray();
    }
}