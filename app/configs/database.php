<?php 
namespace app\configs;
!INDEX ? exit('exit') : true;

class database
{

    public function set() : array
    {
        return [
            'type' => '',
            'name' => '',
            'user' => '',
            'pass' => '',
            'host' => '',
            'file_name' => '',
        ];
    }
}