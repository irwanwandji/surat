<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPetugas extends Model
{
    protected $table            = 'tb_penerima';
    protected $primaryKey       = 'id_penerima';
    protected $allowedFields    = [
        'id_penerima', 'nama_penerima'
    ];
    public function getPetugas()
    {
        return $this->table('tb_penerima')->get();
    }

    public function tambahPenerima($data)
    {
        return $this->db->table('tb_expedisi')->insert($data);
        // return $query;
    }
}
