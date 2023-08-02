<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\ModelDaftarSurat;
use App\Models\ModelExpedisi;
use App\Models\ModelPenerima;
use App\Models\ModelSuratMasuk;
use App\Models\ModelSuratMasukNew;
use App\Models\ModelSatker;

class Input extends BaseController
{
    public function __construct()
    {
        $this->expedisi = new ModelExpedisi();
        $this->suratMasuk = new ModelSuratMasuk();
        $this->penerima = new ModelPenerima();
        $this->satker = new ModelSatker();
    }

    public function index()
    {
        $data = [
            'tampilexpedisi' => $this->expedisi->findAll(),
            'tampilpenerima' => $this->penerima->findAll(),
            'tampilsatker' => $this->satker->findAll()
        ];
        // helper('form');
        return view('input/inputsurat', $data);
    }
    public function index2()
    {
        if ($this->request->isAJAX()) {
            $db = \Config\Database::connect();

            $data = [
                'dataexpedisi' => $db->table('tb_expedisi')->get()
            ];
            echo view('input/inputsurat', $data);
        }
    }



    public function simpan()
    {
        $jml_surat = htmlspecialchars($this->request->getPost('jml_surat'));

        if ($jml_surat <= 0) {
            $pesan = [
                'sukses' => '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Input jumlah surat salah. Silahkan coba lagi.</h5>
                
              </div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('/input/index');
        } else {


            $data = [
                'expedisi' => $this->request->getPost('expedisi'),
                'jml_surat' => $jml_surat,
                'tujuan_surat' => $this->request->getPost('tujuan_surat'),
                'asal_surat' => htmlspecialchars($this->request->getPost('asal_surat')),
                'diterima' => $this->request->getPost('diterima'),
                'jam_diterima' => $this->request->getPost('jam_diterima'),
                'penerima' => $this->request->getPost('penerima'),
                // 'keterangan' => $this->request->getPost('keterangan'),
                'keterangan' => htmlspecialchars($this->request->getPost('keterangan')),
                'tgl_kembali' => "0",
                'surat_kembali' => "0",
                // 'status_surat' => "Terkirim",
                'ket_pengembalian' => "-",

            ];

            $surat = new ModelSuratMasuk();

            $simpan = $surat->simpan($data);

            if ($simpan) {

                $pesan = [
                    'sukses' => '<div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Data berhasil diinput !</h5>
              </div>'
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('/input/index');
            }
        }
    }

    public function simpan2()
    {
        $jml_surat = $this->request->getPost('jml_surat');

        if ($jml_surat <= 0) {
            $pesan = [
                'sukses' => '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Input jumlah surat salah. Silahkan coba lagi.</h5>
                
              </div>'
            ];
            session()->setFlashdata($pesan);
            return redirect()->to('/input/index');
        } else {


            $data = array(
                'expedisi' => $this->request->getPost('expedisi'),
                'jml_surat' => $jml_surat,
                'tujuan_surat' => $this->request->getPost('tujuan_surat'),
                'asal_surat' => $this->request->getPost('asal_surat'),
                'diterima' => $this->request->getPost('diterima'),
                'jam_diterima' => $this->request->getPost('jam_diterima'),
                'penerima' => $this->request->getPost('penerima'),
                'keterangan' => $this->request->getPost('keterangan'),
                'tgl_kembali' => "0",
                'surat_kembali' => "0",

            );

            $surat = new ModelSuratMasuk();

            $simpan = $surat->simpan($data);

            if ($simpan) {

                $pesan = [
                    'sukses' => '<div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Data berhasil diinput</h5>
              </div>'
                ];

                session()->setFlashdata($pesan);
                return redirect()->to('/input/index');
            }
        }
    }


    public function kembalikanSurat()
    {

        $data = [

            // 'expedisi' => $this->request->getPost('expedisi'),
            // 'jml_surat' => $this->request->getPost('jml_surat'),
            // 'jml_surat' => $jml_surat,
            // 'tujuan_surat' => $this->request->getPost('tujuan_surat'),
            // 'asal_surat' => $this->request->getPost('asal_surat'),
            // 'diterima' => $this->request->getPost('diterima'),
            // 'jam_diterima' => $this->request->getPost('jam_diterima'),
            // 'penerima' => $this->request->getPost('penerima'),
            // 'keterangan' => $this->request->getPost('keterangan'),
            // 'tgl_kembali' => date('Y-m-d'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali'),
            'surat_kembali' => "1",

        ];

        $surat = new ModelSuratMasuk();

        $kembali = $surat->kembalikansurat($data);

        if ($kembali) {

            $pesan = [
                'sukses' => '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Data berhasil dikembalikan</h5>
              </div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/daftar');
        }
    }

    public function simpanSurat()
    {
        $expedisi = $this->request->getVar('expedisi');
        $jml_surat = $this->request->getVar('jml_surat');
        $tujuan_surat = $this->request->getVar('tujuan_surat');
        $asal_surat = $this->request->getVar('asal_surat');
        $diterima = $this->request->getVar('diterima');
        $jam_diterima = $this->request->getVar('jam_diterima');
        $penerima = $this->request->getVar('penerima');
        $keterangan = $this->request->getVar('keterangan');
        // 'jml_surat' => $this->request->getPost('jml_surat'),
        // 'tujuan_surat' => $this->request->getPost('tujuan_surat'),
        // 'asal_surat' => $this->request->getPost('asal_surat'),
        // 'diterima' => $this->request->getPost('diterima'),
        // 'jam_diterima' => $this->request->getPost('jam_diterima'),
        // 'penerima' => $this->request->getPost('penerima'),
        // 'keterangan' => $this->request->getPost('keterangan'),
        // 'tgl_kembali' => date('Y-m-d'),
        $tgl_kembali = "0";
        $surat_kembali = "0";

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'jml_surat' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expedisi' => [
                'rules' => 'required',
                'label' => 'Nama Satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],

        ]);

        if (!$valid) {
            $pesan = [
                'errorExpedisi' => '<br><div class= "alert alert-danger"> ' . $validation->getError() . '</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/input/index');
        } else {
            $this->tb_suratmasuk->insert([
                'expedisi' => $expedisi,
                'jml_surat' => $jml_surat,
                'tujuan_surat' => $tujuan_surat,
                'asal_surat' => $asal_surat,
                'diterima' => $diterima,
                'jam_diterima' => $jam_diterima,
                'penerima' => $penerima,
                'keterangan' => $keterangan,
                'penerima' => $penerima,
                'tgl_kembali' => $tgl_kembali,
                'surat_kembali' => $surat_kembali,
            ]);

            $pesan = [
                'sukses' => '<div class= "alert alert-success">Data Surat berhasil ditambahkan...</div>'
            ];

            session()->setFlashdata($pesan);
            return redirect()->to('/suratmasuk/index');
        }
    }

    public function edit($kode)
    {
        $cekData = $this->tb_suratmasuk->find($kode);

        if ($cekData) {

            $data = [
                'expedisi' => $cekData['expedisi'],
                'jml_surat' => $cekData['jml_surat'],
                'tujuan_surat' => $cekData['tujuan_surat'],
                'asal_surat' => $cekData['asal_surat'],
                'diterima' => $cekData['diterima'],
                'jam_diterima' => $cekData['jam_diterima'],
                'penerima' => $cekData['penerima'],
                'keterangan' => $cekData['keterangan'],
                'tgl_kembali' => $cekData['tgl_kembali'],
                // 'surat_kembali' => $cekData['surat_kembali'],

            ];

            return view('input/editsurat', $data);
        } else {
            123;
        }
    }

    function hapus($surat)
    {
        $this->tb_suratmasuk->delete($surat);

        return redirect()->to('Input/index');
    }
}
