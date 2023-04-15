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
                        <a href="#Inovasi" class="h4 font-weight-bold d-block c-orange-red">#Program<span class="c-gold">Inovasi</span></a>
                        <a href="#Inovasi" class="h4 font-weight-bold d-block c-blue">#Aksi<span class="c-gold">Inovasi</span></a>
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
                    <div class="before_title font-weight-bold">
                        <span>#Program</span>
                        <span class="c-orange">#Aksi</span>
                        <span class="c-yollow">#Inovasi</span>
                    </div>
                    <h2>Ayo Support Produk, Kegiatan dan Karya Kami</h2>
                    <p>
                        Program inklusi dengan support aplikasi marketing berbasis web yang memprioritaskan peningkatan karakter positif dan kecerdasan finansial bagi anak-anak marjinal dan rentan putus sekolah level SMP.
                    </p>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-none d-sm-block order-1 order-sm-1">
                <div class="item_box item_one">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/01.png" />
                    </div>
                    <h3>POT SERABUT KELAPA </h3>
                    <p class="c-blue">
                        KODE: 21.8.4
                    </p>
                </div>
                <div class="item_box item_two">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/02.png" />
                    </div>
                    <h3>LAMPU HIAS</h3>
                    <p class="c-green">
                        KODE: 21.8.1
                    </p>
                </div>
                <div class="item_box item_three">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/03.png" />
                    </div>
                    <h3>LAMPU HIAS</h3>
                    <p class="c-green">
                        KODE: 21.8.1
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 order-3 order-sm-2" data-aos="fade-up" data-aos-delay="0">
                <div class="app_mobile">
                    <img class="apoo" src="/web/refs/shop/app.png" />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-none d-sm-block order-2 order-sm-3">
                <div class="item_box item_four">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/04.png" />
                    </div>
                    <h3>BEL KAYU</h3>
                    <p class="c-green">
                        KODE: 21.8.2
                    </p>
                </div>
                <div class="item_box item_five">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/05.png" />
                    </div>
                    <h3>TEMPAT PENSIL/PULPEN</h3>
                    <p class="c-blue">
                        KODE: 19.7.1
                    </p>
                </div>
                <div class="item_box item_six">
                    <div class="img_bbo">
                        <img src="/web/refs/shop/06.png" />
                    </div>
                    <h3>KAPAL HIAS</h3>
                    <p class="c-orange">
                        KODE: 21.8.4
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= Url::toRoute('inovasi') ?>" class="btn btn_lg_primary effect-letter rounded-8 bg-dark c-white m-2">
                Temukan Produk dan Katalog Kami
            </a>
            <a href="<?= Url::toRoute('data-hasil') ?>" class="btn btn_lg_primary effect-letter rounded-8 bg-orange c-white m-2">
                Lihat Data & Hasil Transaksi Kami
            </a>
        </div>

    </div>
</section>
<!-- End. feature_app -->


<!-- Start test_monials__workspace -->
<section class="test_monials__workspace margin-t-2 padding-t-10 pb-3" id="Testimonials">
    <div class="container-fluid">
        <div class="box__others">
            <div class="row">
                <div class="col-lg-5 pl-lg-0">
                    <div class="img__people">
                        <img src="/web/img/workspace/others.svg" alt="">
                        <div class="col-lg-5 item_title">
                            <div class="title_sections">
                                <div class="before_title">
                                    <span class="c-orange-red">Dokumentasi Inovasi</span>
                                </div>
                                <h2>Riwayat Transaksi</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 my-lg-auto mx-auto">
                    <div class="people__say">
                        <div class="swiper-container gallery-top swipe_circle">
                            <!-- item Users -->
                            <div class="person_thumbs">
                                <div class="swiper-wrapper" style="left: -5%;">
                                    <div class="swiper-slide">
                                        <img class="pagination rounded-circle" src="/web/img/persons/01.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="pagination rounded-circle" src="/web/img/persons/02.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="pagination rounded-circle" src="/web/img/persons/03.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="pagination rounded-circle" src="/web/img/persons/04.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="pagination rounded-circle" src="/web/img/persons/05.png" />
                                    </div>
                                </div>
                            </div>
                            <!-- item content -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-1.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-2.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-3.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-5.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-4.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/web/refs/trx-6.png" alt="" style="width: 100%; max-width: 300px;">
                                </div>
                            </div>
                        </div>
                        <div class="simple__particles">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <!-- End Swiper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End. test_monials__workspace -->