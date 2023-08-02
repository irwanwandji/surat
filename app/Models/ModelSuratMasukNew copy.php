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

    function tampildata()
    {
        return $this->table('tb_suratmasuk')->get();
    }

    function simpan($data)
    {
        return $this->table('tb_suratmasuk')->insert($data);
    }

    function tampilData2($katakunci = null, $start = 0, $length = 0){
        $builder = $this->table('tb_suratmasuk');
        if($katakunci){
          $arr =  explode(" ", $katakunci);
          for ($i=0; $i < count($arr) ; $i++) {
           $builder = $builder->like('expedisi', $arr[$i]);
           $builder = $builder->like('asal_surat', $arr[$i]);
           $builder = $builder->like('tujuan_surat', $arr[$i]);
          }
        }
        if($start != 0 or $length !=0){
            $builder = $builder->limit($length, $start);
        }

        return $builder->orderBy('diterima', 'asc')get()->getResult();
    }
}
