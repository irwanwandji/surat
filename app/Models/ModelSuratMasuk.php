<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSuratMasuk extends Model
{
    protected $table            = 'tb_suratmasuk';
    protected $primaryKey       = 'id_surat';
    protected $allowedFields    = [
        'id_surat', 'expedisi', 'jml_surat', 'tujuan_surat', 'asal_surat', 'diterima', 'jam_diterima', 'penerima', 'keterangan', 'tgl_kembali', 'surat_kembali', 'ket_pengembalian'
    ];

    function tampildata()
    {
        return $this->table('tb_suratmasuk')->orderBy('diterima DESC, jam_diterima DESC')->get();
    }

    function simpan($data)
    {
        return $this->table('tb_suratmasuk')->insert($data);
    }

    function deleteSurat($id_surat)
    {
        return $this->table('tb_suratmasuk')->delete(['id_surat' => $id_surat]);
    }

    function kembalikansurat($data, $id_surat)
    {
        $query = $this->db->table('tb_suratmasuk')->update($data, ['id_surat' => $id_surat]);
        return $query;
    }
}
