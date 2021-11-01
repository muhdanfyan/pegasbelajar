<div class="card">
    <div class="card-header">
        <a href="<?= base_url('admin/guru/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Asal Sekolah</th>
                    <th>Nomor Hp</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal_lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($guru as $guru) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $guru->nama_guru ?></td>
                        <td><?= $guru->email ?></td>
                        <td><?= $guru->asal_sekolah ?></td>
                        <td><?= $guru->no_hp ?></td>
                        <td><?= $guru->tempat_lahir ?></td>
                        <td><?= $guru->tgl_lahir ?></td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>