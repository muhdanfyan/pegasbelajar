<div class="row">
    <div class="col-12">
        <div class="card">
        <?= $this->session->flashdata('error');?>
        
            <form role="form" method="post" action="<?= base_url('admin/guru/tambah') ?>">
                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input type="text" name="nama_guru" id="nama_guru" placeholder="Nama Guru" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nomor Hp</label>
                        <input type="number" name="no_hp" id="no_hp" placeholder="Nomor Hp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" class="form-control">
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