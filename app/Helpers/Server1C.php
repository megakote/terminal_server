<?php

namespace App\Helpers;
use Curl;

class Server1C{

    private $curl;
    private $api_param = 'params';

    public function __construct()
    {
        $username = env('1C_LOGIN');
        $password = env('1C_PASSWORD');
        $this->curl = new Curl(env('1C_URL'));
        $this->curl->config_load('trip.cfg');
        $this->curl->set(CURLOPT_USERPWD, $username . ":" . $password);
    }

    public function request ($request, $type='GET', $data='')
    {
        if (strtoupper($type) == 'GET') {
            return $this->curl->request($request);
        } elseif (strtoupper($type) == 'POST') {
            $this->curl->clear_headers();
            $this->curl->add_header("Content-Type: application/json");
            $postData = json_encode($data, JSON_UNESCAPED_UNICODE);
            $this->curl->post($postData, false);
            return $this->curl->request($request);
        }

    }

    // public function post($post)
    // {
    //     $this->curl->clear_headers();
    //     $this->curl->add_header("Content-Type: application/json");
    //     $postData = json_encode($post, JSON_UNESCAPED_UNICODE);
    //     return $this->curl->post($postData, false);
    // }

    public function getItems()
    {
        $categorys = $this->request('crm/hs/Terminal/?action=group&' . env('ID_TERM', "PRK001"));
        $categorys = json_decode($categorys['html'], true);

        $products = $this->request('crm/hs/Terminal/?action=Goods&idterm=' . strtoupper(env('ID_TERM', "PRK001")));
        $products = json_decode($products['html'], true);

        return ['categorys' => $categorys, 'products' => $products];
    }
}