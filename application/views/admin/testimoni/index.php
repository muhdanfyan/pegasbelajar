<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Testimoni</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($testimoni as $testimoni) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $testimoni->nama ?></td>

                        <td><?= $testimoni->jabatan ?></td>

                        <td><img src="<?= base_url('assets/upload/testimoni/') . $testimoni->foto ?>" alt=""></td>
                        <td><?= $testimoni->testimoni ?></td>
                        <td>
                            <a href="<?= base_url('admin/testimoni/edit/') . $testimoni->id_testimoni ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url('admin/testimoni/hapus/') . $testimoni->id_testimoni ?>" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>