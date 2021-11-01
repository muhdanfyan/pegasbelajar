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
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($admin as $admin) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $admin->nama ?></td>
                        <td><?= $admin->username ?></td>
                        <td><?= $admin->email ?></td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </tbody>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>