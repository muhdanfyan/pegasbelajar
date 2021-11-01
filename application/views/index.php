<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <?php $this->load->view('front/slider') ?>

    <section class="ftco-section">
        <div class="container">
            <h3 class="text-center">Informasi Gaya Belajar</h3>
            <div class="row">


                <?php foreach ($gaya_belajar as $gaya) : ?>
                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services p-3 py-4 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="<?= $gaya->icon ?>"></span>
                            </div>
                            <div class="media-body px-3">
                                <h3 class="heading mb-0"><?= $gaya->nama_gaya_belajar ?></h3>
                                <div style="margin-top: 0; padding-top:0; height: 104px; overflow: hidden;">

                                    <p><?= $gaya->karakteristik ?></p>
                                </div>
                                <a href="<?= base_url('front/detail_gayabelajar/') . $gaya->id_gaya_belajar ?>" class="badge badge-info">Selengkapnya..</a>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <section class="ftco-section-3 ftco-counter img" id="section-counter" style="padding-top: 30px; padding-bottom: 30px; background-image: url(<?= base_url('assets/template/') ?>images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-9 text-center">
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-10">
                                <h3 class="text-white">Telah Melayani</h3>
                                <div class="row">

                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text ">
                                                <strong class="number text-white" data-number="<?= $siswa ?>">0</strong>
                                                <span class="text-white">Siswa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text">
                                                <strong class="number text-white" data-number="<?= $admin ?>">0</strong>
                                                <span class="text-white">Kelas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text">
                                                <strong class="number text-white" data-number="<?= $siswa + $admin ?>">0</strong>
                                                <span class="text-white">Total</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-2">Testimonial</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        <?php foreach ($testimoni as $testimoni) : ?>
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/template/') ?>images/person_1.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-5"><?= $testimoni->testimoni ?></p>
                                        <p class="name"><?= $testimoni->nama ?></p>
                                        <span class="position"><?= $testimoni->jabatan ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('front/footer') ?>