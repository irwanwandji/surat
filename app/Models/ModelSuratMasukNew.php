<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSuratMasukNew extends Model
{
    protected $table            = 'tb_suratmasuk';
    protected $primaryKey       = 'id_surat';
    protected $allowedFields    = [
        'id_surat', 'expedisi', 'jml_surat', 'tujuan_surat', 'asal_surat', 'diterima', 'jam_diterima', 'penerima', 'keterangan', 'tgl_kembali', 'surat_kembali'
    ];
}
