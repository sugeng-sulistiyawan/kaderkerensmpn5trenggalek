<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // '/web/css/bootstrap.min.css',
        '/web/css/animate.min.css',
        '/web/css/swiper.min.css',
        // '/web/css/icons.css',
        '/web/css/aos.min.css',
        '/web/css/main.css',
        '/web/css/normalize.css',
    ];
    public $js = [
        // '/web/js/jquery-3.6.4.min.js',
        '/web/js/jquery-migrate-3.4.0.min.js',
        // '/web/js/bootstrap.bundle.min.js',
        '/web/js/particles.min.js',
        '/web/js/TweenMax.min.js',
        '/web/js/ScrollMagic.min.js',
        '/web/js/animation.gsap.min.js',
        '/web/js/debug.addIndicators.min.js',
        '/web/js/swiper.min.js',
        '/web/js/countdown.min.js',
        '/web/js/simpleParallax.min.js',
        '/web/js/waypoints.min.js',
        '/web/js/jquery.counterup.min.js',
        '/web/js/charming.min.js',
        '/web/js/imagesloaded.pkgd.min.js',
        '/web/js/jquery.bxslider.min.js',
        '/web/js/sharer.min.js',
        '/web/js/sticky.min.js',
        '/web/js/aos.js',
        '/web/js/main.js',
    ];
    public $depends = [
        YiiAsset::class,
        // BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}