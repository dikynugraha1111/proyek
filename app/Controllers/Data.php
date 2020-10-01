<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataPelanggaranModel;
use App\Models\DataPrestasiModel;

class Data extends BaseController
{
    protected $dataModel;
    protected $dataPelanggaranModel;
    protected $dataPrestasiModel;
    public function __construct()
    {
        $this->dataModel = new DataModel();
        $this->dataPelanggaranModel = new DataPelanggaranModel();
        $this->dataPrestasiModel = new DataPrestasiModel();
    }

    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataModel->getAllData(),
        ];

        return view('halaman/datatable', $data);
    }

    public function detail($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = $this->dataModel->getDataId($id);
        $dataPrestasi = $this->dataPrestasiModel->getIdDataSiswa($id);
        $dataPelanggaran = $this->dataPelanggaranModel->getIdDataSiswa($id);

        $all = [
            'siswa' => $data,
            'prestasi' => $dataPrestasi,
            'pelanggaran' => $dataPelanggaran,
        ];

        return view('halaman/dataDetail', $all);
    }

    public function edit($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }

        $data = [
            'siswa' => $this->dataModel->getDataId($id),
        ];
        echo view('halaman/dataEdit', $data);
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
            $namafile = $this->request->getPost('id') . $nama;
            // pindahkan file
            $fileupload->move('gambar/ijazah', $namafile);
            //hapus file lama
            unlink('gambar/ijazah/' . $this->request->getPost('fileLama'));
        }
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'nisn' => $this->request->getPost('nisn'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'lulus' => $this->request->getPost('lulus'),
            'ijazah' => $namafile,
        ];
        $this->dataModel->dataEdit($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/Data');
    }

    public function delete($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to('/Login');
        }
        $data = $this->dataModel->getDataId($id);
        unlink('gambar/ijazah/' . $data['ijazah']);
        $this->dataModel->deleteData($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Data');
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
            $namafile = $this->request->getPost('nisn') . $nama;
            // pindahkan file
            $fileupload->move('gambar/ijazah', $namafile);
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nisn' => $this->request->getPost('nisn'),
            'nik' => $this->request->getPost('nik'),
            'alamat' => $this->request->getPost('alamat'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'lulus' => $this->request->getPost('lulus'),
            'fileupload' => $namafile,
        ];

        $this->dataModel->createData($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambah');
        return redirect()->to('/Data');
    }
    //--------------------------------------------------------------------

}
