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

    public $name = 'KADER KEREN SMPN 5 Trenggalek';
    public $title = 'KADER KEREN SMPN 5 Trenggalek - Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan';

    /** @var Request */
    public $request;

    public $prod;

    private static $_phone = '+6282 334 662 442';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->version = $this->version ?? time();
        $this->root = __DIR__;

        $this->request = new Request();
        $this->prod = $this->request->get('prod') == 1;
    }

    /**
     * 
     */
    public static function whatsappUrl(string $text = "Hallo Kak, saya mau tanya-tanya dong :)\n"): string
    {
        return 'https://wa.me/' . static::phonePretty(true, true) . ($text ? '?text=' . urldecode($text) : '');
    }

    /**
     * 
     */
    public static function phonePretty($hideSpace = false, $hidePlus = false): string
    {
        $search = [];

        if ($hideSpace) {
            $search[] = ' ';
        }
        if ($hidePlus) {
            $search[] = '+';
        }

        return str_replace($search, '', static::$_phone);
    }

    /**
     * 
     */
    public function getBasePage(string $page = ''): string
    {
        return $this->baseUrl . '/index.php?page=' . $page;
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

    /**
     * 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 
     */
    public function setTitle($value)
    {
        $this->title = $value;
    }
}
