<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * 
 */
class BuildController extends Controller
{
    /**
     * @return int Exit code
     */
    public function actionIndex()
    {

        // $baseUrl = 'https://kaderkerensmpn5trenggalek.my.id';
        $baseUrl = '';

        $pages = [
            'index',
            'dokumentasi',
            'tentang',
            'inovasi',
            'data-hasil',
        ];
        $replace = [
            // $config->baseUrl              => $baseUrl . '/',
            // $config->assets               => './assets',
            '/index.php?page=index'       => 'index.html',
            '/index.php?page=dokumentasi' => 'dokumentasi.html',
            '/index.php?page=tentang'     => 'tentang.html',
            '/index.php?page=inovasi'     => 'inovasi.html',
            '/index.php?page=data-hasil'  => 'data-hasil.html',
        ];
        foreach ($pages as $page) {
            echo "build {$page} ...";
            try {
                $content = file_get_contents($config->baseUrl . '/index.php?prod=1&page=' . $page);

                $html = strtr($content, $replace);

                file_put_contents(dirname($config->root) . '/' . $page . '.html', $html);
            } catch (\Throwable $th) {
                echo " error\n{$th->getMessage()}";
                exit;
            }
            echo " success\n";
        }


        return ExitCode::OK;
    }
}
