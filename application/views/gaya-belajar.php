<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_3.jpg'); background-attachment:fixed; max-height: 200px;">

        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <?php foreach ($gaya as $gaya) : ?>
                        <h1 class="mb-1 bread">
                            <?= $gaya->nama_gaya_belajar ?>
                        </h1>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <!-- <div class="col-md-10 pl-md-5 ftco-animate karakteristik">
                    <?php
                    echo ("<h2>" . $gaya->title . "</h2>");
                    ?>
                    <div>
                        <img style="height: 200px;" class="img-fluid" src="<?= base_url('./assets/upload/gayabelajar/') . $gaya->gambar ?>" alt="">
                    </div>

                    <?php
                    echo ($gaya->karakteristik);
                    ?>
                </div> -->
                <div class="col-md-4">
                    <img width="400" class="img-fluid" style="margin-top: 60px;" src="<?= base_url('./assets/upload/gayabelajar/') . $gaya->gambar ?>" alt="">

                </div>
                <div class="col-md-8">
                    <h2><?= $gaya->title; ?></h2>
                    <p><?= $gaya->karakteristik ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('front/footer') ?>