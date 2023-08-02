<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSatker extends Model
{
    protected $table            = 'tb_satker';
    protected $primaryKey       = 'kd_satker';
    protected $allowedFields    = [
        'kd_satker', 'nama_satker'
    ];
    function tampilsakter()
    {
        return $this->table('tb_satker')->get();
    }
}
