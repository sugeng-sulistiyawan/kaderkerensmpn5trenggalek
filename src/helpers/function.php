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

// 


/**
 * 
 */
function build(Config $config, $page)
{
    $html = strtr(file_get_contents($config->baseUrl . '/index.php?page=' . $page), [
        $config->assets => './assets',
    ]);

    file_put_contents(dirname($config->root) . '/' . $page . '.html', $html);
}
