<div class="row">
    <div class="col-12">
        <div class="card">
            <?php echo form_open_multipart('admin/gayabelajar/tambah')?>
            <!-- <form role="form" method="post" action="<?= base_url('admin/gayabelajar/tambah') ?>"> -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_gaya_belajar">Nama Gaya Belajar</label>
                        <input type="text" name="nama_gaya_belajar" id="nama_gaya_belajar" class="form-control" id="nama_gaya_belajar" placeholder="Masukkan Nama Gaya Belajar">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" placeholder="Title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" id="gambar" placeholder="gambar" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon">
                    </div>
                    <div class="form-group">
                        <label for="">Karakteristik</label>
                        <textarea class="textarea" name="karakteristik" id="karakteristik" cols="30" rows="3" placeholder="Karakteristik"></textarea>


                    </div>
                    <div class="form-group">
                        <label for="">Tipe Kepribadian</label>
                        <textarea class="textarea" name="tipe_kepribadian" id="tipe_kepribadian" cols="30" rows="3" placeholder="Tipe Kepribadian"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tugas yang sesuai</label>
                        <textarea class="textarea" name="tugas_yg_sesuai" id="tugas_yg_sesuai" cols="30" rows="3" placeholder="Tugas Yang Sesuai"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kemampuan Adaptif</label>
                        <textarea class="textarea" name="kemampuan_adaptif" id="kemampuan_adaptif" cols="30" rows="3" placeholder="Kemampuan Adaptif"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kekuatan</label>
                        <textarea class="textarea" name="kekuatan" id="kekuatan" cols="30" rows="3" placeholder="kekuatan"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="">Kelemahan</label>
                        <textarea class="textarea" name="kelemahan" id="kelemahan" cols="30" rows="3" placeholder="Kelemahan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Cara Belajar Yang sesuai</label>
                        <textarea class="textarea" name="cara_belajar" id="cara_belajar" cols="30" rows="3" placeholder="Cara Belajar"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Metode megajar guru yang sesuai</label>
                        <textarea class="textarea" name="metode_guru" id="metode_guru" cols="30" rows="3" placeholder="Metode Mengajar Guru Yang Sesuai"></textarea>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            <?php echo form_close()?>
        </div>

    </div>
</div>

<!-- Button trigger modal -->
<script>
    CKEDITOR.replace('karakteristik');
</script>