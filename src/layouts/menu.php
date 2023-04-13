<?php

use app\Config;

$config = new Config();

// Beranda
// struktur organisasi
// program inovasi
// aksi inovasi
// Dokumentasi
// Strategi Keberlanjutan

?>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="<?= $config->baseUrl ?>">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $config->isPage('index') ? '' : $config->getBasePage('index') ?>#Inovasi">Inovasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $config->getBasePage('dokumentasi') ?>">Dokumentasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $config->getBasePage('dokumentasi') ?>">Dokumentasi</a>
        </li>
    </ul>
    <div class="nav_account btn_demo3">
        <a href="<?= $config->whatsappUrl() ?>" class="btn btn_sm_primary c-dark effect-letter rounded-8" target="_blank" rel="noopener noreferrer">
            Admin Whatsapp
        </a>
    </div>
</div>