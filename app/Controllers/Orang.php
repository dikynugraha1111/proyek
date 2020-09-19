<?php

namespace App\Controllers;

class Orang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Orang | Pages",
        ];

        return view('halaman/orang', $data);
    }

    //--------------------------------------------------------------------

}
