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
                <a class="logo c-dark" href="<?= $config->baseUrl ?>">
                    <img src="<?= $config->assets ?>/favicon.png" alt="">
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
<section class="loading_overlay<?= $config->prod ? '' : ' d-none' ?>">
    <div class="loader_logo">
        <img class="logo" src="<?= $config->assets ?>/favicon.png?version=<?= $config->version ?>" />
    </div>
</section>
<!-- End. Loader -->
</div>
<!-- End. wrapper -->

<?php concatJs(); ?>

</body>