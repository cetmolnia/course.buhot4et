<?php

namespace app\controllers\index;

use app\controllers\controller;
use electronic\core\view\view;

class indexController extends controller
{

    public function index()
    {

        $this->title('Главная страница');
        $this->data['courseApi'] = $this->curl();
        new view('index/index', $this->data);
    }

    private function curl()
    {
        $ch = curl_init('https://budget-academy.ru/api/courses?key=35fnb4d3g5n43dg5n4');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }


}