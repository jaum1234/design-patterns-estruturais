<?php
namespace Alura\DesignPattern\Http;

use Alura\DesignPattern\Http\HttpAdapter;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo 'curl_http';
        //$curl = curl_init('http://api.registro.orcamento');
        //curl_setopt($curl, CURLOPT_POST, $data);
        //
        //curl_exec($curl);
    }
}