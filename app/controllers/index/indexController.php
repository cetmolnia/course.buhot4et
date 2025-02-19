<?php

namespace app\controllers\index;

use app\controllers\controller;
use electronic\core\view\view;

class indexController extends controller
{

    public function index()
    {

        $this->title('Главная страница');
        // $this->data['courseApi'] = $this->curl();
        new view('index/index', $this->data);
    }

    public function data()
    {
        header('Content-Type: application/json; charset=utf-8');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Accept');
        echo $this->curl();
    }

    private function curl()
    {
        $ch = curl_init('https://budget-academy.ru/api/courses');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }


}