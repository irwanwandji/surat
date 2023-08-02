<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\SuratMasukNew;

use App\Models\ModelSuratMasukNew;
use App\Models\ModelDaftarSurat;
use App\Models\ModelSuratMasuk;

class Main extends BaseController
{
    public function __construct()
    {
        // $this->suratmasukhariini = new ModelSuratMasukNew();
    }
    public function index2()
    {

        return view('main/dashboard');
    }
    function diterimaAll()
    {
        $modelSuratMasuk = new ModelSuratMasuk();
        $result = $modelSuratMasuk->select('sum(jml_surat) as jml_surat')->first();
        $data['sumAll'] = $result['jml_surat'];
    }

    function diterimaHariIni()
    {
        $modelSuratMasuk = new ModelSuratMasuk();
        $result = $modelSuratMasuk->where('diterima', date('Y-m-d'))->select('sum(jml_surat) as jml_surat')->first();
        $data['sumAllHariIni'] = $result['jml_surat'];
    }

    public function index()
    {

        // diterimaAll();
        // diterimaHariIni();
        $modelSuratMasuk = new ModelSuratMasuk();
        $result = $modelSuratMasuk->select('sum(jml_surat) as jml_surat')->first();
        $data['sumAll'] = $result['jml_surat'];
        return view('main/dashboard', $data);
    }

    // public function surathariini()
    // {
    //     $data = [
    //         'tampildatahariini' => $this->suratmasukhariini->orderBy('diterima', 'DESC')->findAll()


    //     ];
    //     return view('daftar/daftarsuratmasukhariini', $data);
    // }
}
