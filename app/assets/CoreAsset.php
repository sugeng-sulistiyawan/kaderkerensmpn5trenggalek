<?php

namespace app\assets;

use Yii;
use yii\helpers\Json;
use yii\web\AssetBundle;

/**
 * @link      https://www.imperdev.id/
 * @author    Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright Copyright (c) IMPERDEV
 */
class CoreAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $css = [
        'css/bs5-ext.css',
        'css/style.css',
    ];
    public $js = [
        // 'js/jquery.steps.custom.min.js',
        // 'js/replace-yii2-dynamic-form.min.js',
        // 'js/app-ajaxcrud.js',
        // 'js/bs5-ext.js',
        'js/script.js',
    ];
    public $depends = [
        AxiosAsset::class,
        SocketIoAsset::class,
        ClipboardAsset::class,
        Html2CanvasAsset::class,
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->publishOptions = [
            'forceCopy' => request('rebuild-assets') == 1 || YII_ENV_DEV,
        ];

        Yii::$app->view->registerCss(minifyCss(
            <<< CSS
@keyframes loaderBlink {
    50% { 
        color: transparent;
    }
}
.loader .loader__dot {
    animation: 1s loaderBlink infinite; 
    margin-left: 1px;
}
.loader .loader__dot:nth-child(2) {
    animation-delay: 250ms;
}
.loader .loader__dot:nth-child(3) {
    animation-delay: 500ms;
}
CSS
        ));

        $CORE_CONFIGS = [
            'no_selected_data'    => t('app', 'Tidak ada data dipilih'),
            'must_select_least_1' => t('app', 'Mohon setidaknya memilih 1 data.'),
            'ok'                  => t('app', 'OK'),
            'ok_options'          => [
                'icon'  => '<i class="las la-check"></i> ',
                'class' => 'btn btn-primary',
            ],
            'cancel'         => t('app', 'Batal'),
            'cancel_options' => [
                'icon'  => '<i class="las la-times"></i> ',
                'class' => 'btn btn-light',
            ],
            'execute'          => t('app', 'Execute'),
            'loading'          => t('app', 'Loading'),
            'loading_dot'      => '<div class="loader">' . t('app', 'Loading') . '<span class="loader__dot">.</span><span class="loader__dot">.</span><span class="loader__dot">.</span></div>',
            'loading_progress' => '<div class="progress"><div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>',

            'error_title'          => t('app', 'Error!'),
            'error_copy_message'   => t('app', 'Copy not supported or blocked. Press CTRL+C to copy.'),
            'success_title'        => t('app', 'Success!'),
            'success_copy_message' => t('app', 'Text copied to the clipboard. Press CTRL+V to paste.'),

            'image' => [
                'preview_title' => t('app', 'Menampilkan Gambar'),
            ]
        ];

        Yii::$app->view->registerJs(minifyJs('var CORE_CONFIGS = ' . Json::encode($CORE_CONFIGS)), Yii::$app->view::POS_HEAD);

        $js = <<< JS
$('.ql-container').each(function () {
    $(this).parent().css('height', '100%');
});
JS;
        Yii::$app->view->registerJs(minifyJs($js));
    }
}
