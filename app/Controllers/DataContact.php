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
<<<<<<< HEAD
        return redirect()->to('/DataPelanggaran');
=======
        return redirect()->to('/DataContact');
>>>>>>> 58c4665c813b9ab3fe3c2d5da54ebe0f00fee52b
    }
}
