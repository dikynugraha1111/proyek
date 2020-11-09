<?php

namespace App\Controllers;

use App\Models\DataContactModel;

class Contact extends BaseController
{
    protected $dataContact;
    public function __construct()
    {
        $this->dataContact = new DataContactModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Contact | Page',
        ];
        return view('halaman/contact', $data);
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'messages' => $this->request->getPost('message'),
        ];
        $this->dataContact->create($data);

        session()->setFlashdata('success', 'Data berhasil dikirim');

        return redirect()->to('/Contact');
    }

    //--------------------------------------------------------------------

}
