<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($slider as $slider) : ?>
            <div class="carousel-item <?= $slider->status; ?>">
                <div class="hero-wrap" style="background-image: url('<?= base_url('assets/upload/slider/') . $slider->gambar ?>'); background-attachment:fixed; height: 500px;">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                            <div class="col-md-8 ftco-animate text-center">
                                <h1 class="mb-4">Gaya Belajar itu Unik. <br> Penasaran ? Kenali Gaya Belajarmu Disini!</h1>
                                <p>
                                    <a href="<?= base_url('front/intruksi') ?>" class="btn btn-primary px-4 py-3">Mulai Tes</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>