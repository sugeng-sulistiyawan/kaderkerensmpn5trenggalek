<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/_app/vendor/autoload.php';
require __DIR__ . '/_app/vendor/yiisoft/yii2/Yii.php';

require __DIR__ . '/_app/helpers/function.php';

$config = require __DIR__ . '/_app/config/web.php';

(new yii\web\Application($config))->run();
