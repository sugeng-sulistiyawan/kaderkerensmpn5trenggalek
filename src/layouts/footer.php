<?php

use app\Config;

$config = new Config();

?>

</main>
<!-- end main -->

<!-- [id] content -->
<footer class="footer_short bg-white padding-t-12 pb-4">
    <div class="container">
        <div class="row justify-content-md-center text-center">
            <div class="col-md-8">
                <a class="logo c-dark" href="mobile-app.html">
                    <img src="<?= $config->assets ?>/logo.png" alt="">
                </a>
                <div class="mt-4">
                    <h4 class="font-weight-bold">KADEr KEREN</h4>
                    <h6>Tekad Bermasa Depan Cerah bagi Siswa Kelompok Rentan</h6>
                </div>
                <div class="opyright">
                    <p>
                        © <?= date('Y') ?>
                        <a href="<?= $config->baseUrl ?>"><?= $config->name ?></a>.
                        <span class="d-block d-md-inline-block">All Right Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Start Section Loader -->
<section class="loading_overlay d-none">
    <div class="loader_logo">
        <img class="logo" src="<?= $config->assets ?>/favicon.png?version=<?= $config->version ?>" />
    </div>
</section>
<!-- End. Loader -->
</div>
<!-- End. wrapper -->

<!-- jquery -->
<script src="<?= $config->assets ?>/js/jquery-3.5.0.js" type="text/javascript"></script>
<!-- jquery-migrate -->
<script src="<?= $config->assets ?>/js/jquery-migrate.min.js" type="text/javascript"></script>
<!-- popper -->
<script src="<?= $config->assets ?>/js/popper.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="<?= $config->assets ?>/js/bootstrap.min.js" type="text/javascript"></script>
<!--
  ============
  vendor file
  ============
   -->
<!-- particles -->
<script src="<?= $config->assets ?>/js/vendor/particles.min.js" type="text/javascript"></script>
<!-- TweenMax -->
<script src="<?= $config->assets ?>/js/vendor/TweenMax.min.js" type="text/javascript"></script>
<!-- ScrollMagic -->
<script src="<?= $config->assets ?>/js/vendor/ScrollMagic.js" type="text/javascript"></script>
<!-- animation.gsap -->
<script src="<?= $config->assets ?>/js/vendor/animation.gsap.js" type="text/javascript"></script>
<!-- addIndicators -->
<script src="<?= $config->assets ?>/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
<!-- Swiper js -->
<script src="<?= $config->assets ?>/js/vendor/swiper.min.js" type="text/javascript"></script>
<!-- countdown -->
<script src="<?= $config->assets ?>/js/vendor/countdown.js" type="text/javascript"></script>
<!-- simpleParallax -->
<script src="<?= $config->assets ?>/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
<!-- waypoints -->
<script src="<?= $config->assets ?>/js/vendor/waypoints.min.js" type="text/javascript"></script>
<!-- counterup -->
<script src="<?= $config->assets ?>/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
<!-- charming -->
<script src="<?= $config->assets ?>/js/vendor/charming.min.js" type="text/javascript"></script>
<!-- imagesloaded -->
<script src="<?= $config->assets ?>/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<!-- BX-Slider -->
<script src="<?= $config->assets ?>/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
<!-- Sharer -->
<script src="<?= $config->assets ?>/js/vendor/sharer.js" type="text/javascript"></script>
<!-- sticky -->
<script src="<?= $config->assets ?>/js/vendor/sticky.min.js" type="text/javascript"></script>
<!-- Aos -->
<script src="<?= $config->assets ?>/js/vendor/aos.js" type="text/javascript"></script>
<!-- main file -->
<script src="<?= $config->assets ?>/js/main.js?version=<?= $config->version ?>" type="text/javascript"></script>
<!-- mobile -->
<script src="<?= $config->assets ?>/js/pages/mobile.js?version=<?= $config->version ?>" type="text/javascript"></script>

</body>