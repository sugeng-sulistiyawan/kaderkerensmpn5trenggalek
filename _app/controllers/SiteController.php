<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionTentang()
    {
        return $this->render('tentang');
    }

    /**
     * @return string
     */
    public function actionDokumentasi()
    {
        return $this->render('dokumentasi');
    }

    /**
     * @return string
     */
    public function actionInovasi()
    {
        return $this->render('inovasi');
    }

    /**
     * @return string
     */
    public function actionDataHasil()
    {
        return $this->render('data-hasil');
    }
}
