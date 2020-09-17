<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Home | Pages",
		];

		return view('halaman/home', $data);
	}

	//--------------------------------------------------------------------

}
