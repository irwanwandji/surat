<?php namespace App\Controllers;
use App\Models\StatModel;

class Statistik extends BaseController
{
	public function index()
	{
		$bulan = $this->request->getGet('bulan');
		// jika tidak ada ambil bulan sekarang
		$bulan = $bulan?$bulan:Date("m");

		return view('stat/tampilstat');
	}
	
	public function apiData($bulan){
		$corona = new StatModel();
		$corona->where('diterima >=',"2020-{$bulan}-01");
		$corona->where('diterima <=',"2020-{$bulan}-31");
		$corona->orderBy('diterima','asc');
		echo json_encode($corona->get()->getResult());
	}
}