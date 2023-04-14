<?php

use app\Config;

$config = new Config();

dd($config->getTitle());
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan" />
  <meta name="keywords" content="Inklusi Sosial, KADER KEREN, SMPN 5 Trenggalek" />
  <meta name="author" content="KADER KEREN SMPN 5 Trenggalek" />

  <title><?= $config->title ?></title>

  
  <?php echo "\n";
  concatCss(); ?>

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>