<div class="card">
    <div class="card-header">
        <?= $this->session->flashdata('message'); ?>
        <a href="<?= base_url('admin/gayabelajar/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Gaya Belajar</th>
                    <th>Karakteristik</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($gaya_belajar as $gaya_belajar) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $gaya_belajar->nama_gaya_belajar ?></td>
                        <td><?= $gaya_belajar->karakteristik ?></td>

                        <td>
                            <a href="<?= base_url('admin/gayabelajar/edit/') . $gaya_belajar->id_gaya_belajar ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url('admin/gayabelajar/hapus/') . $gaya_belajar->id_gaya_belajar ?>" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>