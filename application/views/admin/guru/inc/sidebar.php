<?php

// $id_guru = $this->session->userdata('id_guru');
// $kelas = $this->My_model->listKelas($id_guru);
// echo print_r($id_guru);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('guru/profile') ?>" class="brand-link">
        <img src="<?= base_url('assets/admin/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PegasBelajar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('guru/profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/kelas/tambah') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Tambah Kelas</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Daftar Kelas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"><?= $total_kelas ?></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <?php foreach ($kelas as $kelas) : ?>
                            <li class="nav-item">

                                <a href="<?= base_url("guru/daftarsiswa/index/$kelas->id_kelas") ?>" class="nav-link">

                                    <p><?= $kelas->nama_kelas ?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>