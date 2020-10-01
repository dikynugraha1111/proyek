<?php

namespace App\Models;

use App\Controllers\Data;
use GuzzleHttp\Client;

use CodeIgniter\Model;

class DataUser extends Model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/User_Controller',
        ]);
    }

    public function login($username)
    {
        $client = new Client();

        $response = $client->request('POST', 'http://localhost:8080/User_Controller/username', [
            'form_params' => [
                'username' => $username,
            ]
        ]);
        // return $this->db->get('mahasiswa')->result_array();

        $result = json_decode($response->getBody()->getContents(), true);
        if ($result['status'] == 'success') {
            return $result['data'][0];
        } else {
            return 0;
        }
    }
}
