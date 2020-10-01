<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataPrestasiModel;

class DataPrestasi extends BaseController
{

    protected $dataPrestasiModel;
    protected $dataModel;
    public function __construct()
    {
        $this->dataPrestasiModel = new DataPrestasiModel();
        $this->dataModel = new DataModel();
    }

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataPrestasiModel->getAllData(),
        ];


        return view('halaman/datatableprestasi', $data);
    }

    public function detail($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data =  $this->dataPrestasiModel->getDataId($id);
        $siswa = $this->dataModel->getDataId($data['id_data_siswa']);
        $all = [
            'data' => $data,
            'siswa' => $siswa,
        ];


        return view('halaman/dataDetailPrestasi', $all);
    }

    public function create()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }
        // validasi gambar
        $this->validate([
            'fileupload' => 'max_size[file,1024]|mime_in[file,image/jpg,image/jpeg,image/png]|is_image[file]'
        ]);
        // ambil file
        $fileupload = $this->request->getFile('fileupload');
        // cek apakaah ada gambar
        if ($fileupload->getError() == 4) {
            $namafile = 'default.jpg';
        } else {
            // ambil nama sampul
            $nama = $fileupload->getName();
            $namafile = $this->request->getPost('id_data_siswa') . $nama;
            // pindahkan file
            $fileupload->move('gambar/prestasi', $namafile);
        }

        $data = [
            'id_data_siswa' => $this->request->getPost('id_data_siswa'),
            'tingkat' => $this->request->getPost('tingkat'),
            'penyelenggara' => $this->request->getPost('penyelenggara'),
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'hasil' => $this->request->getPost('hasil'),
            'piagam' => $namafile,
        ];

        $this->dataPrestasiModel->createData($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('/DataPrestasi');
    }

    public function edit($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataPrestasiModel->getDataId($id),
        ];
        return view('halaman/dataEditPrestasi', $data);
    }

    public function saveEdit()
    {
        // validasi gambar
        $this->validate([
            'fileupload' => 'max_size[file,1024]|mime_in[file,image/jpg,image/jpeg,image/png]|is_image[file]'
        ]);
        // ambil file
        $fileupload = $this->request->getFile('fileupload');
        // cek apakaah ada gambar
        if ($fileupload->getError() == 4) {
            $namafile = $this->request->getPost('fileLama');;
        } else {
            // ambil nama sampul
            $nama = $fileupload->getName();
            $namafile = $this->request->getPost('id_data_siswa') . $nama;
            // pindahkan file
            $fileupload->move('gambar/prestasi', $namafile);
            //hapus file lama
            unlink('gambar/prestasi/' . $this->request->getPost('fileLama'));
        }
        $data = [
            'id' => $this->request->getPost('id'),
            'id_data_siswa' => $this->request->getPost('id_data_siswa'),
            'tingkat' => $this->request->getPost('tingkat'),
            'penyelenggara' => $this->request->getPost('penyelenggara'),
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'hasil' => $this->request->getPost('hasil'),
            'piagam' => $namafile,
        ];
        $this->dataPrestasiModel->dataEdit($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/DataPrestasi');
    }

    public function delete($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }
        $data = $this->dataPrestasiModel->getDataId($id);
        unlink('gambar/prestasi/' . $data['prestasi']);
        $this->dataPrestasiModel->deleteData($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/DataPrestasi');
    }
}
