<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'KADER KEREN SMPN 5 Trenggalek - Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan';


// $this->registerJsFile('/web/js/pages/mobile.js', [
//     'depends' => [AppAsset::class],
// ]);

?>

<!-- Start Banner Section -->
<section class="demo_1 banner_section banner_demo8 border-bottom-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 order-2 order-lg-1">
                <div class="banner_title text-center text-sm-left">
                    <h1 class="c-blue mt-4 mt-sm-2">
                        KADER
                        <span class="c-yollow">KEREN.</span>
                    </h1>
                    <h6 class="mb-5 c-sea">
                        Te<span class="c-blue">kad</span> Bermasa Depan C<span class="c-blue">er</span>ah bagi Siswa
                        <span class="c-yollow">Ke</span>lompok <span class="c-yollow">Ren</span>tan
                    </h6>
                    <div class="subscribe_phone">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="button--click">
                                    <a href="<?= whatsappUrl() ?>" class="btn btn_md_primary sweep_top sweep_letter bg-orange-red c-white rounded-8 d-block">
                                        <div class="inside_item">
                                            <span data-hover="<?= phonePretty() ?>">Hubungi Admin</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center text-sm-left">
                        <a href="#ProgramInovasi" class="h4 font-weight-bold d-block c-orange-red">#Program<span class="c-gold">Inovasi</span></a>
                        <a href="#AksiInovasi" class="h4 font-weight-bold d-block c-blue">#Aksi<span class="c-gold">Inovasi</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mx-auto order-1 order-lg-1">
                <div class="ill_appMobile">
                    <img class="ill_app" src="/web/img/app/c_app.svg" />
                    <img class="ill_bg" src="/web/img/app/background.svg" />
                    <img class="ill_user" src="/web/refs/slider-1.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Start Services -->
<section class="services_section service_demo5 service__workspace my-0 padding-py-12">
    <div class="container">
        <div class="text-center">
            <div class="title_sections mb-5">
                <div class="before_title">
                    <span>Tentang</span>
                    <span class="c-yollow">Sekolah</span>
                </div>
                <h2>SMPN 5 TRENGGALEK</h2>
            </div>
        </div>
        <div class="items_serv selected" data-aos="fade-up" data-aos-delay="100">
            <div class="media">
                <div class="media-body text-center h6 c-blue">
                    SMPN 5 Trenggalek merupakan sekolah menengah pertama yang berada di tengah kota Trenggalek.
                    Berdasarkan Keputusan Menteri Koordinasi Bidang Pembangunan Manusia dan Kebudayaan Nomor 22 Tahun 2022,
                    2/3 wilayah Kabupaten Trenggalek merupakan pegunungan dan menjadi lokus kemiskinan ekstrim.
                    <br><br>

                    SMPN 5 Trenggalek bertekad mewujudkan sekolah berbasis pendidikan karakter dan inklusif dengan integrasi inovasi
                    "KADER KEREN". Sasaran program ini adalah siswa marginal dan rentan putus sekolah yang selanjutnya disebut anak asuh.
                    <br><br>

                    KADER KEREN telah diadaptasi SMPN 5 Trenggalek pada program KOPI JOS (Komite Pendidikan Jasmani dan Olahraga Sekolah).
                    Program ini mengarahkan karakter anak yang sering bermain olahraga saat jam pelajaran atau jam kosong. KADER KEREN dan
                    KOPI JOS sama-sama memperbaiki karakter siswa demi menunjang keberlangsungan pendidikannya.
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="<?= Url::toRoute('tentang') ?>" class="btn btn_lg_primary effect-letter rounded-8 margin-t-4 bg-gold c-dark">
                Detail Tentang Kami
            </a>
        </div>

    </div>
</section>
<!-- End Services -->

<!-- Start feature_app -->
<section class="feature_app feature_demo2 padding-py-12" id="Inovasi">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 col-lg-6 text-center">
                <div class="title_sections">
                    <div class="before_title">
                        <span>Rakon.</span>
                        <span class="c-gold">Products</span>
                    </div>
                    <h2>Start your experience with Rakon.</h2>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <div class="z_apps">
                        <a href="#" target="_blank" class="item__app bg_apple mb-3 mb-sm-0">
                            <div class="media">
                                <i class="tio apple icon"></i>
                                <div class="media-body">
                                    <div class="txt">
                                        <span>Available on the</span>
                                        <h4>App Store</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" target="_blank" class="item__app bg_google">
                            <div class="media">
                                <img class="icon" src="/web/img/icons/google-play.svg" />
                                <div class="media-body">
                                    <div class="txt">
                                        <span>Get it on</span>
                                        <h4>Google Play</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-none d-sm-block order-1 order-sm-1">
                <div class="item_box item_one">
                    <div class="img_bbo">
                        <img src="/web/img/app/01.png" />
                    </div>
                    <h3>Multigrain Hot Cereal</h3>
                    <p class="c-blue">
                        $14
                    </p>
                </div>
                <div class="item_box item_two">
                    <div class="img_bbo">
                        <img src="/web/img/app/02.png" />
                    </div>
                    <h3>Branch Special</h3>
                    <p class="c-green">
                        $27
                    </p>
                </div>
                <div class="item_box item_three">
                    <div class="img_bbo">
                        <img src="/web/img/app/03.png" />
                    </div>
                    <h3>French Crostini</h3>
                    <p class="c-red">
                        $22
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 order-3 order-sm-2" data-aos="fade-up" data-aos-delay="0">
                <div class="app_mobile">
                    <img class="apoo" src="/web/img/app/app.png" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-none d-sm-block order-2 order-sm-3">
                <div class="item_box item_four">
                    <div class="img_bbo">
                        <img src="/web/img/app/04.png" />
                    </div>
                    <h3>Fried Egg Sandwich</h3>
                    <p class="c-aquamarine">
                        $25
                    </p>
                </div>
                <div class="item_box item_five">
                    <div class="img_bbo">
                        <img src="/web/img/app/05.png" />
                    </div>
                    <h3>Branch Special</h3>
                    <p class="c-blue">
                        $14
                    </p>
                </div>
                <div class="item_box item_six">
                    <div class="img_bbo">
                        <img src="/web/img/app/06.png" />
                    </div>
                    <h3>Lemon Yogurt Parfait</h3>
                    <p class="c-orange">
                        $29
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End. feature_app -->
