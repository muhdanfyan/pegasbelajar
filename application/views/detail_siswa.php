<?php $this->load->view('front/header') ?>
<style>
    #chart {
        margin: 0 auto;
        /* max-height: 200px; */
    }
</style>

<body>
    <section class="hasil_section">
        <?php
        if ($title != 'Detail Siswa') {

            $this->load->view('front/navbar');
        }
        ?>
        <section class="ftco-section">

            <div class="container">
                <?php
                // if ($title = 'Detail Siswa') {
                //     echo "
                //     <div class='row justify-content-center mb-2'>
                //         <div class='col-md-10'>
                //             <div class='card pl-5 pr-5'>
                //                 <div class='row'>
                //                     <div class='col-md-8'>
                //                                     <h4>Detail Siswa</h4>
                //                         </div>
                //                     </div>
                //                 </div>
                //             </div>
                //         </div>
                //     ";
                // }
                ?>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-10">
                        <div class="card pl-5 pr-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <th><?= $login->nama ?></th>
                                        </tr>
                                        <tr>
                                            <th>NIS</th>
                                            <th>:</th>
                                            <th><?= $login->nis ?></th>
                                        </tr>
                                        <tr>
                                            <th>Asal Sekolah</th>
                                            <th>:</th>
                                            <th><?= $login->asal_sekolah ?></th>
                                        </tr>
                                        <tr>
                                            <th>Gaya Belajar Dominan</th>
                                            <th>:</th>
                                            <th><?= $gaya->nama_gaya_belajar ?></th>

                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4" id="chart">
                                    <canvas id="myChart" width="100%" height="100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kekuatan</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->kekuatan ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kelemahan</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->kelemahan ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tipe Kepribadian</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->tipe_kepribadian ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Tugas Yang Sesuai</h4>

                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->tugas_yg_sesuai ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Kemampuan Adaptif</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->kemampuan_adaptif ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Cara Belajar Yang Sesuai</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><?= $gaya->cara_belajar ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Metode Mengajar Guru Yang Sesuai</h4>
                            </div>
                            <div class="card-body">
                                <p><?= $gaya->metode_guru ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center mt-0 mb-5">
                <a href="<?= base_url('data/print/' . $gaya->id_gaya_belajar . '/I')  ?>" class="btn btn-secondary">Export PDF</a>
                <a href="" class="btn btn-primary">Print</a>
            </div>
        </section>


    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
    <script src="<?= base_url('assets/template/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/aos.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= base_url('assets/template/') ?>js/google-map.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script>
        var data = {
            labels: ['Divergen', 'Asimilasi', 'Kovergen', 'Akomodasi'],
            datasets: [{
                    label: 'Chart',
                    backgroundColor: 'rgba(0,240,0,0.5)',
                    data: [<?= $kunciF ?>, <?= $kunciO ?>, <?= $kunciT ?>, <?= $kunciD ?>]
                }
                //,
                // {
                // label: 'Person 2',
                // backgroundColor: 'rgba(0,0,240,0.5)',
                // data: [3, 2, 1, 2, 2, 1, 3, 5]
                // }
            ]
        }

        var ctx = document.getElementById("myChart");

        var myRadarChart = new Chart(ctx, {
            type: 'radar',
            data: data
        });
    </script>

</body>

</html>