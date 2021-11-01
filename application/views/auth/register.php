<?php $this->load->view('front/header') ?>

<body>

	<?php $this->load->view('front/navbar') ?>

	<section class="ftco-section contact-section ftco-degree-bg">
		<div class="container">
			<div class="row block-9">
				<div class="col-md-8 pr-md-5" style="margin:auto">
					<h4 class="mb-4">Silahkan Daftar Siswa!</h4>
					<?= $this->session->flashdata('message') ?>
					<form action="<?= base_url('siswa/auth/register') ?>" method="post">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="nama">Nama Lengkap :</label>
									<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anda" required>
								</div>

								<div class="form-group">
									<label for="">Email :</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
								</div>

								<div class="form-group">
									<label for="">Password :</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<label for="" class="form-label">Nomor Induk :</label>
									<input type="text" name="nis" id="nis" class="form-control" placeholder="Nomor Induk Siswa" required>
								</div>
							</div>
							<div class="col-md-6">

								<div class="form-group">
									<label for="">Asal Sekolah :</label>
									<input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Asal Sekolah" required>
								</div>

								<div class="form-group">
									<label for="">Nomor Hp :</label>
									<input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="+62" required>
								</div>
								<div class="form-group">
									<label for="">Tempat Lahir :</label>
									<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir :</label>
									<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Kode Kelas :</label>
									<input type="text" name="kode_kelas" id="kode_kelas" autocomplete="on" class="form-control" placeholder="Masukkan Kode Kelas" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Daftar" class="btn btn-primary py-3 px-5">
						</div>
					</form>

					<p>Sudah punya akun ? Silahkan <a href="<?= base_url('siswa/auth') ?>">Masuk</a></p>
				</div>

			</div>
		</div>
	</section>



	<?php $this->load->view('front/footer') ?>