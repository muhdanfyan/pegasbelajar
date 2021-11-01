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
                    <th scope="col">Nama Slider</th>
                    <th scope="col">Text</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($slider as $slider) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $slider->nama_slider ?></td>
                        <td><?= $slider->text ?></td>
                        <td><?= $slider->gambar ?></td>
                        <td><?= $slider->status ?></td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
            </tbody>
            </tbody>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>