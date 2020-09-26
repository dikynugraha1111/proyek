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

	public function auth()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if ($username == "admin" && $password == "admin") {
			return redirect()->to("http://localhost:8082/");
		} else {
			session()->setFlashdata('pesan', 'Username atau Password SALAH');
			return redirect()->to('/Login');
		}
	}

	//--------------------------------------------------------------------


}
