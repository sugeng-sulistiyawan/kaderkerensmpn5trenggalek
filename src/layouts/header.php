<?php

use app\Config;

$config = new Config();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan" />
  <meta name="keywords" content="Inklusi Sosial, Kader Keren, SMPN 5 Trenggalek" />
  <meta name="author" content="Kader Keren SMPN 5 Trenggalek" />

  <title><?= $config->title ?></title>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= $config->assets ?>/img/favicon.ico?version=<?= $config->version ?>" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?= $config->assets ?>/apple-icon-57x57.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= $config->assets ?>/apple-icon-60x60.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= $config->assets ?>/apple-icon-72x72.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= $config->assets ?>/apple-icon-76x76.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= $config->assets ?>/apple-icon-114x114.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= $config->assets ?>/apple-icon-120x120.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= $config->assets ?>/apple-icon-144x144.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= $config->assets ?>/apple-icon-152x152.png?version=<?= $config->version ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $config->assets ?>/apple-icon-180x180.png?version=<?= $config->version ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= $config->assets ?>/android-icon-192x192.png?version=<?= $config->version ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $config->assets ?>/favicon-32x32.png?version=<?= $config->version ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= $config->assets ?>/favicon-96x96.png?version=<?= $config->version ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $config->assets ?>/favicon-16x16.png?version=<?= $config->version ?>">
  <link rel="manifest" href="<?= $config->assets ?>/manifest.json">
  <meta name="msapplication-TileColor" content="#0f1b57">
  <meta name="msapplication-TileImage" content="<?= $config->assets ?>/ms-icon-144x144.png?version=<?= $config->version ?>">
  <meta name="theme-color" content="#0f1b57">
  <meta property="og:image" content="<?= $config->assets ?>/og.png?version=<?= $config->version ?>" />

  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/bootstrap.min.css" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/animate.css" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/swiper.min.css" />
  <!-- icons -->
  <!-- <link rel="stylesheet" href="<?= $config->assets ?>/css/icons.css" type="text/css" /> -->
  <!-- aos -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/aos.css" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/main.css?version=<?= $config->version ?>" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="<?= $config->assets ?>/css/normalize.css?version=<?= $config->version ?>" type="text/css" />

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="<?= $config->baseUrl ?>">
              <img class="logo" src="<?= $config->assets ?>/logo.png?version=<?= $config->version ?>" alt="" />
              <div class="navbar-text font-weight-bold my-auto d-lg-none">
                <span class="c-blue">KADEr</span>
                <span class="c-yollow">KEREN</span>
              </div>
            </a>

            <div class="d-lg-none nav_account btn_demo3 ml-auto mr-2">
              <a href="<?= $config->whatsappUrl() ?>" class="btn btn-dark bg-blue btn-sm effect-letter rounded-5" target="_blank" rel="noopener noreferrer">
                Admin Whatsapp
              </a>
            </div>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <?php require __DIR__ . '/menu.php' ?>

          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">