<div class="row">
    <div class="col-8">
        <div class="card">
            <form role="form" method="post" action="<?= base_url('admin/kelas/tambah') ?>">
                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Kode Kelas</label>
                        <input type="text" class="form-control" name="kode_kelas" id="kode_kelas" placeholder="Kode Kelas">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Button trigger modal -->
<script>
    CKEDITOR.replace('karakteristik');
</script>