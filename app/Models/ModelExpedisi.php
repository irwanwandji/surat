<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelExpedisi extends Model
{
    protected $table            = 'tb_expedisi';
    protected $primaryKey       = 'id_expedisi';
    protected $allowedFields    = [
        'id_expedisi', 'nama_expedisi'
    ];
    public function getExpedisi()
    {
        return $this->table('tb_expedisi')->get();
    }

    public function tambahExpedisi($data)
    {
        return $this->db->table('tb_expedisi')->insert($data);
        // return $query;
    }
}
