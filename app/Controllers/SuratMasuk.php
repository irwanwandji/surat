<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSuratMasuk;
use App\Models\ModelSuratMasukNew;

// use Config\Services;

// use \Hermawan\DataTables\DataTable;

// use Config\Services;



class SuratMasuk extends BaseController
{
    // public function __construct()
    // {
    //     $this->suratmasuk = new ModelSuratMasukNew();
    // }

    public function index()
    {
        $model = new ModelSuratmasuk();
        $data['suratmasuk'] = $model->tampildata()->getResult();
        return view('daftar/daftarsuratmasuk', $data);
    }
    public function testing()
    {
        $model = new ModelSuratMasuk();
        $data['suratmasuk'] = $model->tampildata()->getResult();
        return view('daftar/daftarsuratmasuknew', $data);
    }

    public function suratkembali()
    {
        $surat = new ModelSuratMasuk();
        $id_surat = $this->request->getPost('id_surat');

        $data = array(

            'tgl_kembali' => $this->request->getPost('tgl_kembali'),
            'ket_pengembalian' =>  $this->request->getPost('ket_pengembalian'),
            'surat_kembali' => "1",
        );

        $kembali =  $surat->kembalikansurat($data, $id_surat);

        if ($kembali) {
            $pesan = [
                'sukses' => '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Surat berhasil dikembalikan</h5>
          </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/daftarnew');
        }
    }

    public function delete()
    {
        $model = new ModelSuratMasuk();
        $id_surat = $this->request->getPost('id_surat');

        $hapussurat =   $model->deleteSurat($id_surat);

        if ($hapussurat) {
            $pesan = [
                'sukses' => '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Data berhasil di hapus</h5>
          </div>'
            ];

            session()->setFlashdata($pesan);

            return redirect()->to('/daftarnew');
        }
    }
}
