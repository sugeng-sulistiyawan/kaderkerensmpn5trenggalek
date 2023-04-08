<?php

/**
 * 
 */
function build($filename, $content, $params = [])
{
    $_params = [
        '{{ baseUrl }}' => 'https://sugengsulistiyawan.my.id/kaderkerensmpn5trenggalek/',
        '{{ name }}'    => 'Kader Keren SMPN 5 Trenggalek',
        '{{ tagline }}' => 'Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan',
        '{{ version }}' => time(),
    ];
    foreach ($params as $key => $value) {
        $_params["{{ $key }}"] = $value;
    }

    echo ($content = strtr($content, $_params));

    file_put_contents($filename, strtr(trim($content), [
        '../assets' => './assets',
    ]));
}
