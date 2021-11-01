<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>


    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_3.jpg'); background-attachment:fixed; max-height: 300px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">

                    <h1 class="mb-3 bread">Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Informasi Kontak</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <p><span>Alamat :</span>Jalan Bonto Langkasa, Banta-Bantaeng, Rappocini, <br> Banta-Bantaeng, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90222</p>
                </div>
                <div class="col-md-3">
                    <p><span>Telepon :</span> <a href="wa.me/6285240572160">0852 4057 2160</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:pegasbelajar@gmail.com">pegasbelajar@gmail.com</a></p>
                </div>

            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Ada Pertanyaan ?</h4>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subjek">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.599435474612!2d119.43065171412776!3d-5.167955853630409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee29211d15189%3A0x5232d0558e3d7ae5!2sProgram%20Pasca%20Sarjana%20Universitas%20Negeri%20Makassar!5e0!3m2!1sid!2sid!4v1575708015899!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>



    <?php $this->load->view('front/footer') ?>