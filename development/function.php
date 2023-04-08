<?php

/**
 * 
 */
function build($filename, $content, $params = [])
{
    $_params = [];
    foreach ($params as $key => $value) {
        $_params["{{ $key }}"] = $value;
    }

    echo strtr($content, $_params);

    file_put_contents($filename, strtr(trim($content), [
        '../assets' => './assets',
    ]));
}
