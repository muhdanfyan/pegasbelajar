<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Soal</th>
                    <th>Jawaban A</th>
                    <th>Jawaban B</th>
                    <th>Jawaban C</th>
                    <th>Jawaban D</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($soal as $soal) : ?>
                    <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $soal->soal ?></td>
                        <td><?= $soal->jawab_a ?></td>
                        <td><?= $soal->jawab_b ?></td>
                        <td><?= $soal->jawab_c ?></td>
                        <td><?= $soal->jawab_d ?></td>
                        <td>
                            <a href="<?= base_url('admin/soal/edit/') . $soal->id_soal; ?>" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">

                <form method="post" action="<?= base_url('admin/soal/tambah') ?>">

                    <div class="form-group">
                        <!-- <input type="text" class="form-control" name="soal" id="soal" placeholder="Soal"> -->
                        <textarea class="form-control" name="soal" id="soal" cols="30" rows="3" placeholder="Soal"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="jawab_a" id="jawab_a" placeholder="Jawaban A">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jawab_b" id="jawab_b" placeholder="Jawaban B">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jawab_c" id="jawab_c" placeholder="Jawaban C">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jawab_d" id="jawab_d" placeholder="Jawaban D">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>