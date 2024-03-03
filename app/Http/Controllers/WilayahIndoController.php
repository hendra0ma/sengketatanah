<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WilayahIndoController extends Controller
{
    public function getKotaIdProv(Request $req)
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://emsifa.github.io/api-wilayah-indonesia/api/regencies/".$req->prov_id.".json";
        
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
    public function getKecIdKota(Request $req)
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$req->kota_id.".json";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
    public function getDesaIdKec(Request $req)
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://emsifa.github.io/api-wilayah-indonesia/api/villages/".$req->kec_id.".json";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
}
