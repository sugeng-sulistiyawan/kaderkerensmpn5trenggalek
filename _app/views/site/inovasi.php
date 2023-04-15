<?php

/** @var yii\web\View $this */

use yii\helpers\FileHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Inovasi - KADER KEREN SMPN 5 Trenggalek';

?>


<!-- Start banner_about -->
<section class="pt_banner_inner banner_about_three">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6">
                <div class="banner_title_inner margin-b-3">
                    <h1 data-aos="fade-up" data-aos-delay="0">
                        Produk Inovasi Kami
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Ayo Support Produk, Kegiatan dan Karya Kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container pl-md-0">
        <div class="mx-md-n5">
            <img src="/web/refs/shop/thumb.jpg" alt="" class="w-100">
        </div>
    </div>

    <div class="container padding-t-10">
        <p class="font-s-30 font-w-600 c-dark">
            Berbagai macam produk dapat kamu temukan di sini dan membelinya secara lansung dan harga yang sangat terjangkau.
        </p>
    </div>
</section>
<!-- End banner_about -->

<!-- Start team_static_style -->
<section class="team_static_style margin-t-5">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <?php foreach ([
            'snack' => [
                'Aneka Snack dan Camilan',
                'orange-red',
            ],
            'tools' => [
                'Perlengkapan Rumah Tangga',
                'dark',
            ],
        ] as $key => [$label, $color]) : ?>
            <div class="text-center mt-5 mb-3">
                <button class="btn btn-primary btn-block btn-lg c-white bg-<?= $color ?> font-weight-bold" data-toggle="collapse" data-target=".collapse-<?= $key ?>">
                    <?= $label ?>
                </button>
            </div>

            <div class="card collapse-<?= $key ?> collapse show">
                <div class="card-body">

                    <div class="row justify-content-lg-center">

                        <?php foreach (FileHelper::findFiles(dirname(dirname(dirname(__DIR__))) . '/web/refs/shop/' . $key, ['only' => ['*.png', '*.jpg']]) as $value) :

                            explodeFileShop($value, $basename, $code, $title, $price, $description);

                            $price = 'Rp' . Yii::$app->formatter->asDecimal($price, 2);
                            $urlImage = Url::to("/web/refs/shop/{$key}/{$basename}", true);
                        ?>
                            <div class="col-md-6 col-lg-4 item">
                                <div class="card">
                                    <img class="card-img-top" src="<?= $urlImage ?>" alt="<?= $title ?>">
                                    <div class="card-body">
                                        <kbd>KODE: <?= $code ?></kbd>
                                        <h3 class="font-weight-bold my-1"><?= $title ?></h3>
                                        <p><?= $price ?></p>
                                        <p class="mt-2 mb-4 text-muted"><?= $description ?></p>

                                        <a href="<?= whatsappUrl("Halo Kak, saya tertarik dengan produk {$label} berikut dan ingin memesannya.\n\n*Deskripsi Produk:*\n{$urlImage}\n\nKode Barang: *{$code}*\nNama Barang: *{$title}*\nHarga Barang: *{$price}*\n\nTerima kasih.") ?>" class="btn btn-success btn-block" target="_blank" rel="noopener noreferrer">Pesan Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</section>
<!-- End. team_static_style -->

<div class="my-5"></div>