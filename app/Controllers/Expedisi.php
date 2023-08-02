<?php

namespace App\Controllers;

use App\Models\ModelExpedisi;

use App\Controllers\BaseController;

class Expedisi extends BaseController
{
    public function index()
    {
        $model = new ModelExpedisi();
        $data['expedisi'] = $model->getExpedisi()->getResult();
        return view('master/expedisi', $data);
    }

    public function tambahExpedisi()
    {
        $model = new ModelExpedisi();

        $data =  array(
            'nama_expedisi' => $this->request->getPost('nama_expedisi'),
        );

        $tambahExpedisi = $model->tambahExpedisi($data);

        if ($tambahExpedisi) {
            $pesan = [
                'sukses' => '<div class="alert alert-primary alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>Expedisi berhasil ditambah</h5>
          </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/expedisi');
        }
    }
}
