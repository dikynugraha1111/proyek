<?php

namespace App\Models;

use App\Controllers\Data;
use GuzzleHttp\Client;

use CodeIgniter\Model;

class DataPelanggaranModel extends Model
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

        $response = $client->request('GET', 'http://localhost:8080/Pelanggaran_Controller', [
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

        $response = $client->request('GET', 'http://localhost:8080/Pelanggaran_Controller/pelanggaranid', [
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

        $response = $client->request('GET', 'http://localhost:8080/Pelanggaran_Controller/pelanggaranSiswa', [
            'query' => [
                'id_siswa' => $id,
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        $dummy[] = [
            'jenis' => '',
            'nama_pelanggaran' => '',
            'hukuman' => '',
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
            "jenis" => $data['jenis'],
            "nama_pelanggaran" => $data['nama_pelanggaran'],
            "hukuman" => $data['hukuman'],
        ];
        $response = $client->request('POST', 'http://localhost:8080/Pelanggaran_Controller/createPelanggaran', [
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
            "jenis" => $data['jenis'],
            "nama_pelanggaran" => $data['nama_pelanggaran'],
            "hukuman" => $data['hukuman'],
        ];

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);

        $response = $client->request('PUT', 'http://localhost:8080/Pelanggaran_Controller/editPelanggaran', [
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
        $response = $client->request('DELETE', 'http://localhost:8080/Pelanggaran_Controller/deletePelanggaran', [
            'form_params' => $data,
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
