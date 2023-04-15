<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAsset::register($this);

// $this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
// $this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
// $this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
// $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>

    <meta name="description" content="Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan" />
    <meta name="keywords" content="Inklusi Sosial, KADER KEREN, SMPN 5 Trenggalek" />
    <meta name="author" content="KADER KEREN SMPN 5 Trenggalek" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/web/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="/web/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/web/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/web/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/web/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/web/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/web/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/web/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/web/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/web/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/web/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/web/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/web/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/web/favicon-16x16.png">
    <link rel="manifest" href="/web/manifest.json">
    <meta name="msapplication-TileColor" content="#0f1b57">
    <meta name="msapplication-TileImage" content="/web/ms-icon-144x144.png">
    <meta name="theme-color" content="#0f1b57">
    <meta property="og:image" content="/web/og.png" />

    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <div id="wrapper">
        <div id="content">
            <!-- Start header -->
            <header class="header-nav-center active-blue" id="myNavbar">
                <div class="container">
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
                        <a class="navbar-brand mr-1" href="/">
                            <img class="logo" src="/web/logo.png" alt="" />
                            <div class="navbar-text font-weight-bold my-auto d-lg-none">
                                <span class="c-blue">KADER</span>
                                <span class="c-yollow">KEREN</span>
                            </div>
                        </a>

                        <div class="d-lg-none nav_account btn_demo3 ml-auto mr-1">
                            <a href="<?= whatsappUrl() ?>" class="btn btn-dark bg-blue btn-sm effect-letter rounded-5" target="_blank" rel="noopener noreferrer">
                                Kontak Kami
                            </a>
                        </div>

                        <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute('inovasi') ?>">Inovasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute('data-hasil') ?>">Data & Hasil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute('dokumentasi') ?>">Dokumentasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::toRoute('tentang') ?>">Tentang Kami</a>
                                </li>
                            </ul>
                            <div class="nav_account btn_demo3 d-none d-lg-block">
                                <a href="<?= whatsappUrl() ?>" class="btn btn_sm_primary c-dark effect-letter rounded-8" target="_blank" rel="noopener noreferrer">
                                    Kontak Kami
                                </a>
                            </div>
                        </div>

                    </nav>
                    <!-- End Navbar -->
                </div>
                <!-- end container -->
            </header>
            <!-- End header -->

            <!-- Stat main -->
            <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

                <?= $content ?>

            </main>
            <!-- end main -->

            <!-- [id] content -->
            <footer class="footer_short bg-white padding-t-12 pb-4">
                <div class="container">
                    <div class="row justify-content-md-center text-center">
                        <div class="col-md-8">
                            <a class="logo c-dark" href="/">
                                <img src="/web/favicon.png" alt="">
                            </a>
                            <div class="mt-4">
                                <h4 class="font-weight-bold">KADER KEREN</h4>
                                <h6>Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan</h6>
                            </div>
                            <div class="opyright">
                                <p>
                                    © <?= date('Y') ?>
                                    <a href="/">KADER KEREN - SMP Negeri 5 Trenggalek</a>.
                                    <span class="d-block d-md-inline-block">All Right Reserved.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Start Section Loader -->
        <section class="loading_overlay<?= isProd() ? '' : ' d-none' ?>">
            <div class="loader_logo">
                <img class="logo" src="/web/favicon.png" />
            </div>
        </section>
        <!-- End. Loader -->
    </div>
    <!-- End. wrapper -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>