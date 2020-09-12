<?php

namespace App\clases;
use GuzzleHttp\Client;

class Clientes
{
    private $url = 'http://127.0.0.1:8000/api/';
    private $client;

    public function __construct() {
        $this->guzzleHttp();
    }

    private function guzzleHttp(){
        $this->client = $client = new Client([
                                            // Base URI is used with relative requests
                                            'base_uri' => $this->url,
                                            // You can set any number of default request options.
                                            'timeout'  => 2.0,
                                        ]);
    }

    public function getAll()
    {
        $response = $this->client->request('GET', 'clientes');

        $data = json_decode($response->getBody(), true);

        return $data['Data'];
    }

    public function eliminar($id)
    {
        $response = $this->client->request('DELETE', 'clientes/' . $id);

        $data = json_decode($response->getBody(), true);

        return $data;
    }

}

