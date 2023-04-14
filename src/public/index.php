<?php

/**
 * Generator
 *
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */

use app\Config;

$root = dirname(__DIR__);

require $root . '/vendor/autoload.php';
require $root . '/vendor/yiisoft/yii2/Yii.php';
require $root . '/helpers/function.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$config = new Config();

$page = $config->getPage();
switch ($page) {
    case 'dokumentasi':
        $config->title = 'Dokumentasi - KADER KEREN SMPN 5 Trenggalek';
        break;
    case 'tentang':
        $config->title = 'Tentang Kami - KADER KEREN SMPN 5 Trenggalek';
        break;
    case 'inovasi':
        $config->title = 'Inovasi - KADER KEREN SMPN 5 Trenggalek';
        break;
    case 'data-hasil':
        $config->title = 'Data & Hasil - KADER KEREN SMPN 5 Trenggalek';
        break;

    default:
        $page = 'index';
        $config->title = 'Data & Hasil - KADER KEREN SMPN 5 Trenggalek';
        break;
}

require $config->root . '/layouts/header.php';
require $config->root . '/pages/' . $page . '.php';
require $config->root . '/layouts/footer.php';
