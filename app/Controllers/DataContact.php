<?php

namespace App\Controllers;

use App\Models\DataContactModel;

class DataContact extends BaseController
{
    protected $dataContactModel;
    public function __construct()
    {
        $this->dataContactModel = new DataContactModel();
    }

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataContactModel->getAllData(),
        ];
        return view('halaman/datatablecontact', $data);
    }

    public function detail($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataContactModel->getDataId($id),
        ];

        return view('halaman/datadetailcontact', $data);
    }

    public function delete($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = $this->dataContactModel->getDataId($id);
        $this->dataContactModel->deleteData($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/DataContact');
    }
}
