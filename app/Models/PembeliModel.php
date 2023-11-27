<?php

namespace App\Models;

use CodeIgniter\Model;

class PembeliModel extends Model
{
    protected $table            = 'pembelis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'nama', 'email', 'user_image', 'alamat'];

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

    public function getPembeli($id = null){
        if ($id != null){
            return $this->select('pembelis.*')->find($id);
        }
        return $this->select('pembelis.*')->findAll();
    }
    
    public function updatePembeli($data, $id){
        return $this->update($id, $data);
    }
}
