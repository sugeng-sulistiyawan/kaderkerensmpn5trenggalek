<?php

use yii\helpers\VarDumper;

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
function whatsappUrl(string $text = "Hallo Kak, saya mau tanya-tanya dong :)\n"): string
{
    return 'https://wa.me/' . phonePretty(true, true) . ($text ? '?text=' . urlencode($text) : '');
}

/**
 * 
 */
function phonePretty($hideSpace = false, $hidePlus = false): string
{
    $search = [];

    if ($hideSpace) {
        $search[] = ' ';
    }
    if ($hidePlus) {
        $search[] = '+';
    }

    return str_replace($search, '', '+6282 334 662 442');
}

/**
 * 
 */
function isProd()
{
    return \Yii::$app->request->get('prod') == 1;
}

/**
 * `$code_$title_$price_$description`
 * 
 * `_` is separator
 * 
 * `+` => ` `
 * `-b-` => `<strong>`
 * `-eb-` => `</strong>`
 * `-br-` => `<br>`
 * `-sc-` => `:`
 */
function explodeFileShop($file, &$basename, &$code, &$title, &$price, &$description)
{
    $filename = pathinfo($file, PATHINFO_FILENAME);
    $meta = explode('_', $filename);

    $replace = [
        '+'    => ' ',
        '-b-'  => '<strong>',
        '-eb-' => '</strong>',
        '-br-' => '<br>',
        '-sc-' => ':',
    ];

    $basename    = pathinfo($file, PATHINFO_BASENAME);
    $code        = strtr($meta[0], $replace);
    $title       = strtr($meta[1], $replace);
    $price       = strtr($meta[2], $replace);
    $description = strtr($meta[3], $replace);

    return [
        'basename'    => $basename,
        'code'        => $code,
        'title'       => $title,
        'price'       => $price,
        'description' => $description,
    ];
}
