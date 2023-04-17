<?php

/** @var yii\web\View $this */

use yii\helpers\FileHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Dokumentasi - KADER KEREN SMPN 5 Trenggalek';

?>

<!-- Start banner_about -->
<section class="pt_banner_inner banner_px_image">
    <div class="parallax_cover">
        <img class="cover-parallax" src="/web/img/inner/doc.jpg" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <div class="banner_title_inner c-dark">
                    <h1 data-aos="fade-up" data-aos-delay="0">
                        Dokumentasi
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100" class="banner_title_inner c-yollow">
                        KADER KEREN - SMP Negeri 5 Trenggalek
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End banner_about -->


<section class="margin-my-12" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
        <img src="/web/img/inner/doc-thumb.jpg" alt="" class="w-100">
    </div>
</section>

<!-- Start about_cc_grid -->
<section class="about_cc_grid padding-b-12">

    <div class="container">
        <div class="row justify-content-center align-items-center">

            <?php foreach (FileHelper::findFiles(dirname(dirname(dirname(__DIR__))) . '/web/refs/docs', ['only' => ['*.png', '*.jpg']]) as $value) :

                $basename = pathinfo($value, PATHINFO_BASENAME);
                $urlImage = Url::to("/web/refs/docs/{$basename}", true);
            ?>
                <div class="col-md-6 my-2">
                    <img class="w-100" src="<?= $urlImage ?>" alt="">
                </div>
            <?php endforeach ?>

        </div>
    </div>

</section>
<!-- End. about_cc_grid -->