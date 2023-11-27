<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{

    public function getKeranjang($id = null){
        if ($id != null){
            return $this->select('keranjang.*')->find($id);
        }
        return $this->select('keranjang.*')->findAll();
    }
    
    public function updateKeranjang($data, $id){
        return $this->update($id, $data);
    }

    protected $table            = 'keranjang';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_barang', 'jumlah','total_harga'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
