<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenerima;

class Penerima extends BaseController
{
    public function index()
    {
        $model = new ModelPenerima();
        $dataa['petugas_penerima'] = $model->getPenerima()->getResult();
        return view('master/penerima', $dataa);
    }
    public function tambahPenerima()
    {
        $model = new ModelPenerima();

        $data =  array(
            'nama_penerima' => $this->request->getPost('nama_penerima'),
        );

        $tambahPenerima = $model->tambahPenerima($data);

        if ($tambahPenerima) {
            $pesan = [
                'sukses' => '<div class="alert alert-primary alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>Petugas penerima berhasil ditambahkan !</h5>
          </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('penerima');
        }
    }
}
