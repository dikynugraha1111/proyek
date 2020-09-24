<?php

namespace App\Controllers;

use App\Models\Siswa_Model;

class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new Siswa_Model();
    }

    //--------------------------------------------------------------------

    public function index()
    {
        $keywoard_nis = $this->request->getVar('nis');
        // d($keywoard_nis);

        if ($keywoard_nis) {
            $siswa = $this->siswaModel->search($keywoard_nis);
        } else {
            $siswa = $this->siswaModel->getAllSiswa();
        }

        $data = [
            'title' => "Orang | Pages",
            'siswa' => $siswa,
        ];

        return view('halaman/siswa', $data);
    }

    //--------------------------------------------------------------------

    public function getSiswa($id)
    {
        $data = [
            'title' => "Detail | Pages",
            'siswa' => $this->siswaModel->getSiswaId($id),
        ];
        return view('halaman/siswaDetail', $data);
    }
}
