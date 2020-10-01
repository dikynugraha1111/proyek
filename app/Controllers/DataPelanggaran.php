<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataPelanggaranModel;

class DataPelanggaran extends BaseController
{

    protected $dataPelanggaranModel;
    protected $dataModel;
    public function __construct()
    {
        $this->dataPelanggaranModel = new DataPelanggaranModel();
        $this->dataModel = new DataModel();
    }

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataPelanggaranModel->getAllData(),
        ];


        return view('halaman/datatablepelanggaran', $data);
    }

    public function detail($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data =  $this->dataPelanggaranModel->getDataId($id);
        $data2 = $this->dataModel->getDataId($data['id_data_siswa']);
        $all = [
            'data1' => $data,
            'data2' => $data2,
        ];

        return view('halaman/dataDetailPelanggaran', $all);
    }

    public function create()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'id_data_siswa' => $this->request->getPost('id_data_siswa'),
            'jenis' => $this->request->getPost('jenis'),
            'nama_pelanggaran' => $this->request->getPost('nama_pelanggaran'),
            'hukuman' => $this->request->getPost('hukuman'),
        ];
        $this->dataPelanggaranModel->createData($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('/DataPelanggaran');
    }

    public function edit($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataPelanggaranModel->getDataId($id),
        ];
        return view('halaman/dataEditPelanggaran', $data);
    }

    public function saveEdit()
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'id_data_siswa' => $this->request->getPost('id_data_siswa'),
            'jenis' => $this->request->getPost('jenis'),
            'nama_pelanggaran' => $this->request->getPost('nama_pelanggaran'),
            'hukuman' => $this->request->getPost('hukuman'),
        ];
        $this->dataPelanggaranModel->dataEdit($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/DataPelanggaran');
    }

    public function delete($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }
        $data = $this->dataPelanggaranModel->getDataId($id);
        unlink('gambar/prestasi/' . $data['prestasi']);
        $this->dataPelanggaranModel->deleteData($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/DataPelanggaran');
    }
}
