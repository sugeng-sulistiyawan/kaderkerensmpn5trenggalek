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
        $pages = [
            // 'index',
            // 'dokumentasi',
            'tentang',
            // 'inovasi',
            // 'data-hasil',
        ];
        $replace = [
            '/site/index'       => 'index.html',
            '/site/dokumentasi' => 'dokumentasi.html',
            '/site/tentang'     => 'tentang.html',
            '/site/inovasi'     => 'inovasi.html',
            '/site/data-hasil'  => 'data-hasil.html',
        ];
        foreach ($pages as $page) {
            echo "build {$page} ...";
            try {
                $content = file_get_contents("http://localhost:8080/site/{$page}?prod=1");

                $html = strtr($content, $replace);

                file_put_contents(dirname(dirname(__DIR__)) . '/' . $page . '.html', $html);
            } catch (\Throwable $th) {
                echo " error\n{$th->getMessage()}";
                exit;
            }
            echo " success\n";
        }

        return ExitCode::OK;
    }
}
