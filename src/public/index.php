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

require $config->root . '/layouts/header.php';

$page = $config->getPage();
switch ($page) {
    case 'value':
        # code...
        break;

    default:
        $page = 'index';
        require $config->root . '/pages/index.php';
        break;
}

require $config->root . '/layouts/footer.php';

// build($config, $page);
