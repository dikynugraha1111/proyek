<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About | Page',
        ];
        return view('halaman/about', $data);
    }

    //--------------------------------------------------------------------

}
