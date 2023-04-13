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

    public $name = 'KADEr KEREN SMPN 5 Trenggalek';
    public $title = 'KADEr KEREN SMPN 5 Trenggalek - Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan';

    /** @var Request */
    public $request;

    private static $_phone = '+6282 334 662 442';

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

    /**
     * 
     */
    public static function whatsappUrl(string $text = ""): string
    {
        return 'https://wa.me/' . static::phonePretty() . ($text ? '?text=' . urldecode($text) : '');
    }

    /**
     * 
     */
    public static function phonePretty(): string
    {
        return static::$_phone;
    }

    /**
     * 
     */
    public static function phone(): string
    {
        return str_replace(' ', '', static::phonePretty());
    }

    /**
     * 
     */
    public function getPage(): string
    {
        return $this->request->get('page', 'index');
    }

    /**
     * 
     */
    public function isPage($page): string
    {
        return $this->getPage() === $page;
    }
}
