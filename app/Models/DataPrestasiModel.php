<?php

namespace App\Models;

use App\Controllers\Data;
use GuzzleHttp\Client;

use CodeIgniter\Model;

class DataPrestasiModel extends Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/Prestasi_Controller',
        ]);
    }

    public function getAllData()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/Prestasi_Controller', [
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

        $response = $client->request('GET', 'http://localhost:8080/Prestasi_Controller/prestasiid', [
            'query' => [
                'id' => $id,
            ]
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getIdDataSiswa($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/Prestasi_Controller/prestasiSiswa', [
            'query' => [
                'id' => $id,
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        $dummy[] = [
            'tingkat' => '',
            'penyelenggara' => '',
            'nama_kegiatan' => '',
            'hasil' => '',
        ];
        if ($result['status'] == "success") {
            return $result['data'];
        } else {
            return $dummy;
        }
    }

    public function createData($data)
    {
        $client = new Client();

        $data2 = [
            "id_data_siswa" => $data['id_data_siswa'],
            "tingkat" => $data['tingkat'],
            "penyelenggara" => $data['penyelenggara'],
            "nama_kegiatan" => $data['nama_kegiatan'],
            "hasil" => $data['hasil'],
            "piagam" => $data['piagam'],
        ];
        $response = $client->request('POST', 'http://localhost:8080/Prestasi_Controller/create', [
            'form_params' => $data2,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function dataEdit($data)
    {
        $client = new Client();

        $data2 = [
            "id" => $data['id'],
            "id_data_siswa" => $data['id_data_siswa'],
            "tingkat" => $data['tingkat'],
            "penyelenggara" => $data['penyelenggara'],
            "nama_kegiatan" => $data['nama_kegiatan'],
            "hasil" => $data['hasil'],
            "piagam" => $data['piagam'],
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $client->request('PUT', 'http://localhost:8080/Prestasi_Controller/editPrestasi', [
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
        $response = $client->request('DELETE', 'http://localhost:8080/Prestasi_Controller/deletePrestasi', [
            'form_params' => $data,
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
