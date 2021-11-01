<div class="card">
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
               
                <?php foreach ($siswa as $row) : ?>
                    <tr>
                        <input type="hidden" name="id_guru" value="<?=$row->id_guru?>">
                        <th><?= $no++ ?></th>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->email?></td>
                        <td><?= $row->asal_sekolah?></td>
                        <td><?= $row->no_hp?></td>
                        <td><?= $row->tempat_lahir?></td>
                        <td><?= $row->ttl?></td>
                        <td>
                            <a href="<?= base_url("front/tampil_hasil/$row->id_siswa") ?>" class="badge badge-success">detail</a>
                            

                            
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>