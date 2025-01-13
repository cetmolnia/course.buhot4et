<?php 
namespace app\controllers\course;
use app\controllers\controller;
use electronic\core\view\view;
use system\core\app\app;

class courseController extends controller
{
    public function index(app $app)
    {
        $this->title('');
        $slug = $app->getparams->slug;
        $this->data['slug'] = $slug;
        new view('course/index', $this->data);
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
