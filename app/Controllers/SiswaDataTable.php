<?php

namespace App\Controllers;

use App\Models\Siswa_Model;

class SiswaDataTable extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new Siswa_Model();
    }

    public function index()
    {
        // $keywoard_nis = $this->request->getVar('nis');
        // d($keywoard_nis);

        // if ($keywoard_nis) {
        //     $siswa = $this->siswaModel->search($keywoard_nis);
        // } else {
        //     $siswa = $this->siswaModel->getAllSiswa();
        // }

        $data = [
            'title' => "Orang | Pages",
            'siswa' => $this->siswaModel->getAllSiswa(),
        ];

        return view('halaman/siswadatatable', $data);
    }
}
