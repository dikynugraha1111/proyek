<?php

namespace App\Models;

use App\Controllers\Data;
use GuzzleHttp\Client;

use CodeIgniter\Model;

class DataContactModel extends Model
{
    public function getAllData()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/ContactUs_Controller', [
            'query' => []
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        // d($result['data']);
        return $result['data'];
    }

    public function create($data)
    {
        $client = new Client();

        $data2 = [
            "name" => $data['name'],
            "email" => $data['email'],
            "subject" => $data['subject'],
            "messages" => $data['messages'],
        ];
        $response = $client->request('POST', 'http://localhost:8080/ContactUs_Controller/createcontactus', [
            'form_params' => $data2,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getDataId($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:8080/ContactUs_Controller/contactusid', [
            'query' => [
                'id' => $id,
            ]
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function deleteData($id)
    {
        $client = new Client();
        $data = [
            'id' => $id,
        ];
        $response = $client->request('DELETE', 'http://localhost:8080/ContactUs_Controller/deletecontactus', [
            'form_params' => $data,
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }
}
