<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSuratMasukNew;


class SuratMasukNew extends BaseController
{
    public function __construct()
    {
        $this->suratmasuk = new ModelSuratMasukNew();
    }

    public function index()
    {
        $data = [
            'tampildatasurat' => $this->suratmasuk->findAll()
        ];
        return view('daftar/daftarsuratmasuk_new', $data);
    }

    public function hapus($id)
    {
        $rowData = $this->suratmasuk->find($id);

        if ($rowData) {

            $this->suratmasuk->delete($id);

            $pesan = [
                'sukses' => '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Berhasil !</h5>
                Data kategoti berhasil dihapus....
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/kategori/index');
        } else {
            exit('Data tidak ditemukan');
        }
    }
}
