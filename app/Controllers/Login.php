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
			session()->set('username',$username);
			session()->set('password',$password);
			return redirect()->to('/AdminData');
		} else {
			session()->setFlashdata('pesan', 'Username atau Password SALAH');
			return redirect()->to('/Login');
		}
	}

	public function logOut(){
		session()->remove('username');
		session()->remove('password');
		session()->setFlashdata('success', 'Anda berhasil Log Out');
		return redirect()->to('/Login');
	}

	//--------------------------------------------------------------------


}
