<?php

namespace App\Models;

use CodeIgniter\Model;

class FinancialModel extends Model
{
    protected $table = 'financial';
    protected $primaryKey = 'id';
    protected $allowedFields = ['date', 'income', 'expenses'];

    // Metode untuk mendapatkan data laporan keuangan
    public function getFinancial($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    // Metode untuk menambahkan data laporan keuangan
    public function insertFinancial($data)
    {
        return $this->insert($data);
    }

    // Metode untuk mengupdate data laporan keuangan
    public function updateFinancial($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data laporan keuangan
    public function deleteFinancial($id)
    {
        return $this->delete($id);
    }
}