<?php

use app\Config;
use yii\helpers\VarDumper;
use HtmlFormatter\HtmlFormatter;

/**
 * ====================
 *
 * DEBUG
 * 
 * ====================
 */

if (!function_exists('pr')) {
    /**
     * 
     * @param mixed $var
     * @param bool|true $debug
     */
    function pr($var, $debug = true)
    {
        echo "<pre style='padding: 28px;'>";
        print_r($var);
        echo '</pre>';
        if ($debug) {
            die;
        }
    }
}

if (!function_exists('dd')) {
    /**
     * @param mixed $var
     */
    function dd($var)
    {
        VarDumper::dump($var, 100, true);
        die();
    }
}

if (!function_exists('dd_export')) {
    /**
     * @param string $var
     */
    function dd_export($var)
    {
        return VarDumper::export($var);
    }
}

/**
 * ====================
 *
 * MINIFY
 * 
 * ====================
 */

if (!function_exists('minifyHtml')) {
    /**
     * Html Minify
     *
     * @param string $input 
     * @return string
     */
    function minifyHtml($input)
    {
        return \Minify_HTML::minify($input);
    }
}

if (!function_exists('minifyCss')) {
    /**
     * CSS Minify
     *
     * @param string $input 
     * @return string
     */
    function minifyCss($input)
    {
        return \Minify_CSSmin::minify($input);
    }
}

if (!function_exists('minifyJs')) {
    /**
     * JS Minify
     *
     * @param string $input 
     * @return string
     */
    function minifyJs($input)
    {
        return \JSMin\JSMin::minify($input);
    }
}

/**
 * 
 */
function build(Config $config, $page)
{
    // $baseUrl = 'https://kaderkerensmpn5trenggalek.my.id';
    $baseUrl = '';

    $content = file_get_contents($config->baseUrl . '/index.php?prod=1&page=' . $page);

    $html = strtr($content, [
        $config->baseUrl => $baseUrl . '/',
        $config->assets => './assets',
        '/index.php?page=index' => 'index.html',
        '/index.php?page=dokumentasi' => 'dokumentasi.html',
        '/index.php?page=tentang' => 'tentang.html',
    ]);

    file_put_contents(dirname($config->root) . '/' . $page . '.html', $html);
}

/**
 * 
 */
function concatCss()
{
    $config = new Config();
    $css = [
        '/css/bootstrap.min.css',
        '/css/animate.min.css',
        '/css/swiper.min.css',
        // '/css/icons.css',
        '/css/aos.min.css',
        '/css/main.css',
        '/css/normalize.min.css',
    ];

    $out = '';
    $concat = '';
    foreach ($css as $key => $value) {
        $out .= "  <link rel=\"stylesheet\" href=\"{$config->assets}{$value}?v={$config->version}\" type=\"text/css\" />\n";
        $concat .= file_get_contents("{$config->assets}{$value}") . "\n";
    }

    if ($config->prod) {
        file_put_contents(dirname($config->root) . '/assets/css/app.css', minifyCss($concat));
        echo "  <link rel=\"stylesheet\" href=\"{$config->assets}/css/app.css?v={$config->version}\" type=\"text/css\" />\n";
    } else {
        echo $out;
    }
}

/**
 * 
 */
function concatJs()
{
    $config = new Config();
    $js = [
        '/js/jquery-3.6.4.min.js',
        '/js/jquery-migrate-3.4.0.min.js',
        '/js/bootstrap.bundle.min.js',
        '/js/particles.min.js',
        '/js/TweenMax.min.js',
        '/js/ScrollMagic.min.js',
        '/js/animation.gsap.min.js',
        '/js/debug.addIndicators.min.js',
        '/js/swiper.min.js',
        '/js/countdown.min.js',
        '/js/simpleParallax.min.js',
        '/js/waypoints.min.js',
        '/js/jquery.counterup.min.js',
        '/js/charming.min.js',
        '/js/imagesloaded.pkgd.min.js',
        '/js/jquery.bxslider.min.js',
        '/js/sharer.min.js',
        '/js/sticky.min.js',
        '/js/aos.js',
        '/js/main.js',
    ];

    if ($config->isPage('index')) {
        $js[] = '/js/pages/mobile.js';
    }

    $out = '';
    $concat = '';
    foreach ($js as $key => $value) {
        $out .= "  <script src=\"{$config->assets}{$value}?v={$config->version}\" type=\"text/javascript\"></script>\n";
        $concat .= file_get_contents("{$config->assets}{$value}") . "\n";
    }

    if ($config->prod) {
        file_put_contents(dirname($config->root) . '/assets/js/app.js', minifyJs($concat));
        echo "  <script src=\"{$config->assets}/js/app.js?v={$config->version}\" type=\"text/javascript\"></script>\n";
    } else {
        echo $out;
    }
}
