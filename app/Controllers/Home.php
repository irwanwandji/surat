<?php

namespace App\Controllers;

// class Home extends BaseController
// {
//     public function index()
//     {
//         return view('welcome_message');
//     }
// }

class Home extends BaseController
{
    public function index()
    {
        $bulan = $this->request->getGet('bulan');
        // jika tidak ada ambil bulan sekarang
        $bulan = $bulan?$bulan:Date("m");

        return view('tampilstat');
    }
    
    public function apiData($bulan){
        $corona = new StatModel();
        $corona->where('tgl >=',"2020-{$bulan}-01");
        $corona->where('tgl <=',"2020-{$bulan}-31");
        $corona->orderBy('tgl','asc');
        echo json_encode($corona->get()->getResult());
    }
}