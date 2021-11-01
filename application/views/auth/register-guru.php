<?php $this->load->view('front/header') ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('front') ?>"><img src="<?= base_url('assets/template/') ?>images/pegas-02-01.png" width="180"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Beranda</a></li>
                    <li class="nav-item"><a target="_blank" href="<?= base_url('buku-panduan-pegas-belajar.pdf') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Panduan</a></li>
                    <li class="nav-item"><a href="<?= base_url('front/tentang') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Tentang</a></li>
                    <li class="nav-item"><a href="<?= base_url('front/kontak') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Kontak</a></li>

                    <li class="nav-item"><a href="<?= base_url('siswa/auth') ?>" class="nav-link" style="color: #E36C0A">Masuk</a></li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-8 pr-md-5" style="margin:auto">
                    <h4 class="mb-4">Silahkan Daftar Sebagai Guru!</h4>
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('guru/register') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="nama">Nama Lengkap :</label>
                                    <input type="text" name="nama_guru" id="nama_guru" class="form-control" placeholder="Nama Anda" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Password :</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="">NIP :</label>
                                    <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP" required>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Sekolah :</label>
                                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Sekolah" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nomor Hp :</label>
                                    <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="+62" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir :</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir :</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Daftar" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                    <p>Sudah punya akun ? Silahkan <a href="<?= base_url('siswa/auth') ?>">Masuk</a> </p>
                </div>



            </div>
        </div>
    </section>



    <?php $this->load->view('front/footer') ?>