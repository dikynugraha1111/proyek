<?php

namespace App\Models;

use GuzzleHttp\Client;

use CodeIgniter\Model;

class Siswa_Model extends Model
{
    private $_client;
    protected $table = 'data_siswa';
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/Data_Siswa_Controller',
        ]);
    }

    public function getAllSiswa()
    {

        $response = $this->_client->request('GET', '', [
            'query' => []
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        // d($result['data']);
        return $result['data'];
    }

    public function getSiswaId($id)
    {
        $response = $this->_client->request('GET', '/siswaid', [
            'query' => [
                'id' => $id,
            ]
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function search($nis)
    {
        $response = $this->_client->request('GET', '', [
            'query' => []
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);

        foreach ($result['data'] as $nisn) {
            if ($nisn['nisn'] == $nis) {
                $nisnbaru[] = $nisn;
            }
        };
        // $builder->orderBy('nis', 'ASC');
        // return $this->table('orang')->like('nama', $keywoard);
        return $nisnbaru;
    }
}
