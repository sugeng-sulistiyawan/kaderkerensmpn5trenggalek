<?php

/**
 * Generator
 *
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */

require 'function.php';

$dev = __DIR__;
$prod = dirname(__DIR__) . '/index.html';

$params = [
    'title' => 'Kader Keren SMPN 5 Trenggalek - Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan',
];

$content = "<!DOCTYPE html>\n<html lang=\"en\">\n";
$content .= file_get_contents($dev . '/head.html') . "\n";
$content .= file_get_contents($dev . '/mobile-app.html') . "\n";
$content .= "</html>";

build($prod, $content, $params);
