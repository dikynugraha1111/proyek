<?php 
namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Login | Pages",
		];

		return view('halaman/login', $data);
	}

	//--------------------------------------------------------------------


}
