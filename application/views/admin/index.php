<?php $this->load->view('admin/inc/header') ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('admin/inc/navbar') ?>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('admin/inc/sidebar') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <?php $this->load->view($contents) ?>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="http://pegasbelajar.com">Pegas Belajar</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/inc/footer') ?>