<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDaftarSurat extends Model
{
    protected $table            = 'tb_suratmasuk';
    protected $primaryKey       = 'id_surat';
    protected $allowedFields    = [
        'id_surat', 'expedisi', 'jml_surat', 'tujuan_surat', 'asal_surat', 'diterima', 'penerima', 'keterangan', 'tgl_kembali'
    ];

    public function surat_expedisi()
    {
        return $this->table('tb_suratmasuk')->where('expedisi', 'JNE')->get();
    }

    public function noSurat($tanggalSekarang)
    {
        return $this->table('tb_suratmasuk')->select('max(id_surat) as nosurat')->where('diterima', $tanggalSekarang)->get();
    }
}
