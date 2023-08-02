<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSuratMasuk;
use App\Models\ModelSuratMasukNew;

// use Config\Services;

// use \Hermawan\DataTables\DataTable;

use Config\Services;



class SuratMasuk extends BaseController
{
    public function __construct()
    {
        $this->suratmasuk = new ModelSuratMasukNew();
    }

    // public function index()
    // {
    //     $model = new ModelSuratmasuk();
    //     // $data['tb_suratmasuk'] = $model->get
    //     return view('daftar/daftarsuratmasuk', $data);
    // }

    public function index()
    {
        $data = [
            'tampildata' => $this->suratmasuk->orderBy('diterima', 'DESC')->findAll()
        ];
        return view('daftar/daftarsuratmasuk', $data);
    }

    public function formedit($id_surat)
    {
        $rowData = $this->suratmasuk->find($id_surat);
    }

    public function suratkembali()
    {
        $surat = new ModelSuratMasuk();
        $id_surat = $this->request->getPost('id_surat');

        $data = array(
            // 'expedisi' => $this->request->getPost('expedisi'),
            // 'jml_surat' => $this->request->getPost('jml_surat'),
            // 'tujuan_surat' => $this->request->getPost('tujuan_surat'),
            // 'asal_surat' => $this->request->getPost('asal_surat'),
            // 'diterima' => $this->request->getPost('diterima'),
            // 'jam_diterima' => $this->request->getPost('jam_diterima'),
            // 'penerima' => $this->request->getPost('penerima'),
            // 'keterangan' => $this->request->getPost('keterangan'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali'),
            'surat_kembali' => "1",
        );

        $surat->kembalikansurat($data, $id_surat);
        return redirect()->to('/daftar');
    }

    public function kembalikansuratmasuk()
    {

        $id_surat = $this->request->getPost('id_surat');
        // $data = [

        //     'expedisi' => $this->request->getPost('expedisi'),
        //     'jml_surat' => $this->request->getPost('jml_surat'),
        //     'tujuan_surat' => $this->request->getPost('tujuan_surat'),
        //     'asal_surat' => $this->request->getPost('asal_surat'),
        //     'diterima' => $this->request->getPost('diterima'),
        //     'jam_diterima' => $this->request->getPost('jam_diterima'),
        //     'penerima' => $this->request->getPost('penerima'),
        //     'keterangan' => $this->request->getPost('keterangan'),
        //     'tgl_kembali' => date('Y-m-d'),
        //     'tgl_kembali' => $this->request->getPost('tgl_kembali'),
        //     'surat_kembali' => "1",

        // ];

        $surat = new ModelSuratMasuk();
        $kembalikan = [
            'expedisi' => $this->request->getPost('expedisi'),
            'jml_surat' => $this->request->getPost('jml_surat'),
            // 'jml_surat' => $jml_surat,
            'tujuan_surat' => $this->request->getPost('tujuan_surat'),
            'asal_surat' => $this->request->getPost('asal_surat'),
            'diterima' => $this->request->getPost('diterima'),
            'jam_diterima' => $this->request->getPost('jam_diterima'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
            'tgl_kembali' => date('Y-m-d'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali'),
            'surat_kembali' => "1",
            'tgl_kembali' => $this->request->getPost('tgl_kembali'),
            'surat_kembali' => "1"
        ];
        $kembali = $surat->update($id_surat, $kembalikan);

        // $kembali = $surat->kembalikansurat($data);

        if ($kembali) {

            $pesan = [
                'sukses' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Surat berhasil dikembalikannnn</h5>
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/suratmasuk/index');
        }
    }

    // public function formedit($id_surat)
    // {
    //     $uri = service('uri');
    //     $id_surat = $uri->getSegment('3');

    //     $surat = new ModelSuratMasuk();
    //     $rowData = $this->suratmasuk->find($id_surat);

    //     if ($rowData) {
    //         $data = [
    //             'expedisi' => $rowData['expedisi'],
    //             'jml_surat' => $rowData['jml_surat'],
    //             'tujuan_surat' => $rowData['tujuan_surat'],
    //             'asal_surat' => $rowData['asal_surat'],
    //             'diterima' => $rowData['diterima'],
    //             'jam_diterima' => $rowData['jam_diterima'],
    //             'penerima' => $rowData['penerima'],
    //             'penerima' => $rowData['penerima'],
    //             'keterangan' => $rowData['keterangan'],
    //             'penerima' => $rowData['penerima'],

    //         ];

    //         $surat->kembalikansurat($id_surat);
    //         return view('input/editsurat', $data);
    //     } else {
    //         exit('Data surat tidak ditemukan');
    //     }
    // }

    function cariDataSurat()
    {
        if ($this->request->isAJAX()) {
            $json = [
                'data' => view('daftar/modaleditsurat')
            ];

            echo json_encode($json);
        } else {
            exit('Maaf tidak bisa dipanggil');
        }
    }


    function hapus()
    {
        $uri = service('uri');
        $id_surat = $uri->getSegment('3');

        $surat = new ModelSuratMasuk();

        $surat->hapusdata($id_surat);

        // if ($surat) {
        //     $json = [
        //         'sukses' => 'Data Pelanggan berhasil dihapus'
        //     ];
        //     echo json_encode($json);
        // }


        return redirect()->to('/suratmasuk/index');
    }
}
