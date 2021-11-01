<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_3.jpg'); background-attachment:fixed; max-height: 300px; ">
        <div class="overlay"></div>
        <div class="container ">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center" style="margin-top: 10px !important;">
                    <h1 class="bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="row">

                        <div class="col-md-10 bg-light p-5 ftco-animate">
                            <div class="text-center">
                                <img src="<?= base_url('assets/template/') ?>images/pegasbelajar.jpg" height="255" width="250" class="mb-5" style="border-radius: 50%">
                            </div>
                            <p>Pegas Belajar merupakan media penelusuran gaya belajar siswa berbasis website, yang dikembangkan secara khusus untuk membantu siswa mengenali dan memahami preferensi gaya belajarnya. Pegas Belajar ini dibuat dengan memanfaatkan perkembangan IT, yang secara khusus diperuntukkan bagi siswa di sekolah menengah atas (SMA).</p>
                            <p>Pegas Belajar ini adalah hasil dari penelitian pengembangan yang dilakukan oleh Ramli dengan judul penelitian “Pengembangan Pegas Belajar Sebagai Media Penelusuran Gaya Belajar Siswa di Sekolah Menengah Atas (SMA)” pada Program Pascasarjana Universitas Negeri Makassar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('front/footer') ?>