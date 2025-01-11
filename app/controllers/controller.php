<?php 

namespace app\controllers;

use app\models\users;
use electronic\core\config\config;
use electronic\core\collection\collection;

abstract class controller extends \electronic\core\controller\controller
{
    protected $data;
    protected $return;
    protected $siteUrl;

    public function __construct()
    {
        $this->return = new collection();
        $this->return->set([
            'error' => new collection(),
            'class' => new collection(),
            'data'  => new collection(),
            'alert' => new collection(),
        ]);
        if( ((int)date('m') == 12 && (int)date('d') > 15) || (int)date('m') == 1 && (int)date('d') < 15){
            $imgLogo = 'logo_buhot4etru_NY_red.png';
        }else{
            $imgLogo = 'logo_buhot4etru_transp_2023.png';
        } 
        $this->title(config::globals('title'));
        $this->alert();
        $this->data['lang'] = config::globals('lang');
        $this->data['title'] = lang('global', 'title');       
        $this->data['return'] = $this->return;
        $this->data['vueAssetsJs'] = preg_grep('~\.(js)$~', scandir(ROOT . '/public/dist/assets'));
        $this->data['vueAssetsCss'] = preg_grep('~\.(css)$~', scandir(ROOT . '/public/dist/assets'));
        $this->data['imgLogo'] = $imgLogo;
    }

    protected function bc(string $name, string $url = '')
    {
        if(empty($this->data['bc'])){
            $this->data['bc'][] = ['name' => lang('global', 'home'), 'url' => '/'];
        }
        $this->data['bc'][] = ['name' => $name, 'url' => $url];
    }

    protected function alert()
    {
        if ( isset($_SESSION['alert']) ) {
            $this->return->alert->set($_SESSION['alert']);
            unset($_SESSION['alert']);
        } else {
            $this->data['alert'] = [];
        }
    }

    protected function title(string $title = '')
    {
        $configTitle = config::globals('title');
        $sep = ' | ';
        if(!empty($title)){
            $this->data['title'] = $title . $sep . $configTitle;
        }else{
            $this->data['title'] = $configTitle;
        }
    }

    protected function return($data = null)
    {
        if(is_object($data)){
            foreach($data as $a => $i){
                if(empty( $this->data['return']->data->{$a})){
                    $this->data['return']->data->set([$a => $i]);
                }
            }
        }
    }
}