<?php

namespace App\Models;

use App\Controllers\Data;
use GuzzleHttp\Client;

use CodeIgniter\Model;

class DataModel extends Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/Data_Siswa_Controller',
        ]);
    }

    public function getAllData()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/Data_Siswa_Controller', [
            'query' => []
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        // d($result['data']);
        return $result['data'];
    }

    public function getDataId($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/Data_Siswa_Controller/siswaid', [
            'query' => [
                'id' => $id,
            ]
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);


        return $result['data'];
    }

    // public function search($nis)
    // {
    //     $response = $this->_client->request('GET', 'http://localhost:8080/Data_Siswa_Controller', [
    //         'query' => []
    //     ]);
    //     // return $this->db->get('mahasiswa')->result_array();

    //     $result = json_decode($response->getBody()->getContents(), true);

    //     foreach ($result['data'] as $nisn) {
    //         if ($nisn['nisn'] == $nis) {
    //             $nisnbaru[] = $nisn;
    //         }
    //     };
    //     // $builder->orderBy('nis', 'ASC');
    //     // return $this->table('orang')->like('nama', $keywoard);
    //     return $nisnbaru;
    // }

    public function dataEdit($data)
    {
        $client = new Client();

        $data2 = [
            "id" => $data['id'],
            "nisn" => $data['nisn'],
            "nik" => $data['nik'],
            "nama" => $data['nama'],
            "tgl_lahir" => $data['tgl_lahir'],
            "alamat" => $data['alamat'],
            "lulus" => $data['lulus'],
            "ijazah" => $data['ijazah'],
        ];


        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $client->request('PUT', 'http://localhost:8080/Data_Siswa_Controller/editsiswa', [
            'form_params' => $data2,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function deleteData($id)
    {
        $client = new Client();
        $data = [
            'id' => $id,
        ];
        $response = $client->request('DELETE', 'http://localhost:8080/Data_Siswa_Controller/deleteSiswa', [
            'form_params' => $data,
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function createData($data)
    {
        $client = new Client();

        $data2 = [
            "nisn" => $data['nisn'],
            "nik" => $data['nik'],
            "nama" => $data['nama'],
            "tgl_lahir" => $data['tgl_lahir'],
            "alamat" => $data['alamat'],
            "lulus" => $data['lulus'],
            "ijazah" => $data['fileupload'],
        ];
        $response = $client->request('POST', 'http://localhost:8080/Data_Siswa_Controller/create', [
            'form_params' => $data2,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
