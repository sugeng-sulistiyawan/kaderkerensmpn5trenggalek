<?php

/**
 * Generator
 *
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */

use app\Config;

$Root = dirname(dirname(__DIR__));
$App  = $Root . '/src';


require $Root . '/vendor/autoload.php';
require $Root . '/vendor/yiisoft/yii2/Yii.php';
require $App . '/helpers/function.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$config = new Config();

require $config->root . '/layouts/header.php';

$page = $config->request->get('page', 'index');
switch ($page) {
    case 'value':
        # code...
        break;

    case 'index':
    default:
        $page = 'index';
        require $config->root . '/pages/index.php';
        break;
}

require $config->root . '/layouts/footer.php';

// build($config, $page);
