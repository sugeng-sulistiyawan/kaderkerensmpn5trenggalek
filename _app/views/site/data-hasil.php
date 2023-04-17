<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Json;

$this->title = 'Data & Hasil - KADER KEREN SMPN 5 Trenggalek';

foreach ([
    "https://cdn.amcharts.com/lib/5/index.js",
    "https://cdn.amcharts.com/lib/5/locales/id_ID.js",
    "https://cdn.amcharts.com/lib/5/xy.js",
    "https://cdn.amcharts.com/lib/5/percent.js",
    "https://cdn.amcharts.com/lib/5/themes/Animated.js",
    "https://cdn.amcharts.com/lib/5/fonts/notosans-sc.js",
    "https://cdn.amcharts.com/lib/5/plugins/exporting.js",
] as $js) {
    $this->registerJsFile($js, [
        'depends' => AppAsset::class,
    ]);
}

$this->registerJs($this->render('_script', []));


?>

<!-- Start banner_about -->
<section class="pt_banner_inner banner_px_image">
    <div class="parallax_cover">
        <img class="cover-parallax" src="/web/img/inner/data.jpg" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <div class="banner_title_inner c-blue">
                    <h1 data-aos="fade-up" data-aos-delay="0">
                        Data & Hasil
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100" class="banner_title_inner c-dark">
                        KADER KEREN - SMP Negeri 5 Trenggalek
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End banner_about -->

<section class="about_cc_grid padding-b-12 padding-t-6">
    <div class="container">

        <div class="row justify-content-center align-items-center">
            <?php

            $i = 0;
            foreach ([
                'Penghasilan Orang Tua' => [
                    'blue',
                    [
                        '#FF9800',
                        '#8BC34A',
                    ],
                    [
                        [
                            '12',
                            'Penghasilan Orang Tua (Rp)',
                            'Jumlah Siswa',
                            [
                                ['label' => '< 500 ribu', 'value' => 143],
                                ['label' => '500 ribu s/d < 1 juta', 'value' => 306],
                                ['label' => '1 juta s/d < 2 juta', 'value' => 1],
                                ['label' => '2 juta s/d < 5 juta', 'value' => 31],
                                ['label' => '> 5 juta', 'value' => 106],
                                ['label' => 'Tidak Ada Keterangan', 'value' => 30],
                                ['label' => 'Tidak Berpenghasilan', 'value' => 32],
                            ],
                            [
                                '#03A9F4',
                                '#3F51B5',
                                '#FF9800',
                                '#8BC34A',
                                '#9C27B0',
                                '#673AB7',
                                '#9E9E9E',
                                '#E91E63',
                            ],
                        ],
                        [
                            '6',
                            'Penghasilan Orang Tua (Rp)',
                            'BEFORE',
                            [
                                ['label' => '<= 1 juta', 'value' => 511],
                                ['label' => '> 1 juta', 'value' => 138],
                            ],
                            [],
                        ],
                        [
                            '6',
                            'Penghasilan Orang Tua (Rp)',
                            'AFTER',
                            [
                                ['label' => '<= 1 juta', 'value' => 410],
                                ['label' => '> 1 juta', 'value' => 339],
                            ],
                            [],
                        ],
                    ]
                ],
                'Presensi 2021' => [
                    'orange-red',
                    [
                        '#8BC34A',
                        '#FF9800',
                        '#03A9F4',
                        '#E91E63',
                    ],
                    [
                        [
                            '6',
                            'Kehadiran Siswa',
                            'BEFORE',
                            [
                                ['label' => 'Masuk', 'value' => 533],
                                ['label' => 'Sakit', 'value' => 32],
                                ['label' => 'Izin', 'value' => 18],
                                ['label' => 'Tanpa Keterangan', 'value' => 249],
                            ],
                            [],
                        ],
                        [
                            '6',
                            'Kehadiran Siswa',
                            'AFTER',
                            [
                                ['label' => 'Masuk', 'value' => 714],
                                ['label' => 'Sakit', 'value' => 22],
                                ['label' => 'Izin', 'value' => 7],
                                ['label' => 'Tanpa Keterangan', 'value' => 89],
                            ],
                            [],
                        ],
                    ]
                ],
                'Ketertiban Siswa Mengerjakan Tugas' => [
                    'green',
                    [
                        '#8BC34A',
                        '#FF9800',
                        '#E91E63',
                    ],
                    [
                        [
                            '6',
                            'Siswa Mengerjakan Tugas',
                            'BEFORE',
                            [
                                ['label' => 'Mengerjakan', 'value' => 15],
                                ['label' => 'Terlambat', 'value' => 9],
                                ['label' => 'Tidak', 'value' => 5],
                            ],
                            [],
                        ],
                        [
                            '6',
                            'Siswa Mengerjakan Tugas',
                            'AFTER',
                            [
                                ['label' => 'Mengerjakan', 'value' => 27],
                                ['label' => 'Terlambat', 'value' => 4],
                                ['label' => 'Tidak', 'value' => 1],
                            ],
                            [],
                        ],
                    ]
                ],
                'Siswa Malas Belajar' => [
                    'purple',
                    [
                        '#8BC34A',
                        '#FF9800',
                        '#03A9F4',
                        '#E91E63',
                    ],
                    [
                        [
                            '6',
                            'Siswa Malas Belajar',
                            'BEFORE',
                            [
                                ['label' => 'Tertib belajar', 'value' => 423],
                                ['label' => 'Kecanduan Game Online', 'value' => 112],
                                ['label' => 'Cangkruk di Warkop', 'value' => 45],
                                ['label' => 'Pulang Malam', 'value' => 72],
                            ],
                            [],
                        ],
                        [
                            '6',
                            'Siswa Malas Belajar',
                            'AFTER',
                            [
                                ['label' => 'Tertib belajar', 'value' => 576],
                                ['label' => 'Kecanduan Game Online', 'value' => 42],
                                ['label' => 'Cangkruk di Warkop', 'value' => 15],
                                ['label' => 'Pulang Malam', 'value' => 19],
                            ],
                            [],
                        ],
                    ]
                ],
            ] as $key => [$color, $colors, $chart]) :

                $class = Inflector::slug($key);
                $defaultColorJson = Json::encode($colors);
            ?>

                <div class="col-md-12 my-3">
                    <button class="btn c-white btn-primary btn-block btn-lg py-3 font-weight-bold bg-<?= $color ?>" data-toggle="collapse" data-target=".collapse-<?= $class ?>"><?= $key ?></button>
                </div>

                <?php foreach ($chart as [$col, $pre, $label, $data, $customColors]) :

                    $id = "chart-{$i}";
                    $dataJson = Json::encode($data);
                    $colorsJson = empty($customColors) ? $defaultColorJson : Json::encode($customColors);

                    $this->registerJs("__createChartPie('{$id}', {$dataJson}, {$colorsJson}, '{$key} - {$label}');");

                    $i++;
                ?>

                    <div class="col-md-<?= $col ?> collapse-<?= $class ?> collapse">

                        <div class="text-center my-5 ">
                            <h5 class="font-weight-bold"><?= $pre ?></h5>
                            <h4 class="font-weight-bold"><?= $label ?></h4>
                            <div id="<?= $id ?>" class="w-100" style="height: 500px;"></div>
                        </div>

                    </div>

            <?php endforeach;
            endforeach ?>
        </div>

    </div>
</section>