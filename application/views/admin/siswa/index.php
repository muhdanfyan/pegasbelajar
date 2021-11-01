<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NIS</th>
                    <th>Asal Sekolah</th>
                    <th>Nomor Hp</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal_lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($siswa as $siswa) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $siswa->nama ?></td>
                        <td><?= $siswa->email ?></td>
                        <td><?= $siswa->nis ?></td>
                        <td><?= $siswa->asal_sekolah ?></td>
                        <td><?= $siswa->no_hp ?></td>
                        <td><?= $siswa->tempat_lahir ?></td>
                        <td><?= $siswa->tanggal_lahir ?></td>
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