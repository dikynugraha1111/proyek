<?php

namespace App\Controllers;

class AdminData extends BaseController
{
	public function index()
	{
		if (session()->get('username')=='') {
			session()->setFlashdata('pesan', 'Anda Belum Login');
			return redirect()->to('/Login');
		}

		return view('halaman/index');
	}

	//--------------------------------------------------------------------

}
