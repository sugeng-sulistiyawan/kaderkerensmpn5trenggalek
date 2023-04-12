<?php

namespace app;

use yii\base\Component;
use yii\web\Request;

class Config extends Component
{
    public $version;
    public $root;
    public $baseUrl = 'http://localhost/kaderkerensmpn5trenggalek/src/public';
    public $assets = '../../assets';
    
    public $name = 'Kader Keren SMPN 5 Trenggalek';
    public $title = 'Kader Keren SMPN 5 Trenggalek - Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan';

    /** @var Request */
    public $request;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->version = time();
        $this->root = __DIR__;

        $this->request = new Request();
    }
}
