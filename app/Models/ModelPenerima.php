<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenerima extends Model
{
    protected $table            = 'tb_penerima';
    protected $primaryKey       = 'id_penerima';
    protected $allowedFields    = [
        'id_penerima', 'nama_penerima'
    ];
    public function getPenerima()
    {
        return $this->table('tb_penerima')->get();
    }

    public function tambahPenerima($data)
    {
        return $this->db->table('tb_penerima')->insert($data);
        // return $query;
    }
}
