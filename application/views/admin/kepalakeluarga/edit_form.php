<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/KepalaKeluarga/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($KepalaKeluarga as $kunci) : ?>

						<form action="<?php echo site_url('admin/KepalaKeluarga/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/KepalaKeluarga/edit/ID --->
							
							<input type="hidden" name="id" value="<?php echo $kunci->id_kepalakeluarga; ?>" />
							
							<div class="form-group">
								<label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('nama_kepalakeluarga') ? 'is-invalid':'' ?>" type="text" name="nama_kepalakeluarga" placeholder="Nama Kepala Keluarga" value="<?php echo $kunci->nama_kepalakeluarga; ?>" required/>
							</div>
							
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $kunci->tanggal_lahir ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_lahir') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="jumlah_anggotakeluarga">Jumlah Anggota Keluarga</label>
								<input class="form-control <?php echo form_error('jumlah_anggotakeluarga') ? 'is-invalid':'' ?>" type="text" name="jumlah_anggotakeluarga" placeholder="Jumlah Anggota Keluarga" value="<?php echo $kunci->jumlah_anggotakeluarga ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('jumlah_anggotakeluarga') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>" type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $kunci->pekerjaan ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nomor_hp">Nomor HP</label>
								<input class="form-control <?php echo form_error('nomor_hp') ? 'is-invalid':'' ?>" type="text" name="nomor_hp" placeholder="Nomor Hp" value="<?php echo $kunci->nomor_hp ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nomor_hp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="foto_kk">Foto KK</label>
								<div><img src="<?php echo base_url('./assets/kk/') . $kunci->foto_kk?>" border="0" width="70px" height="70px"/></div>
								<input class="form-control <?php echo form_error('foto_kk') ? 'is-invalid' : '' ?>" type="file" name="foto_kk" placeholder="Foto KK" />
								<input type="hidden" name="fotolama" value="<?php echo $kunci->foto_kk; ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto_kk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="Keterangan"><?php echo $kunci->keterangan ?></textarea>
								<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
            					<script>CKEDITOR.replace( 'keterangan' );</script>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					<?php endforeach; ?>

					</div>

					<div class="card-footer small text-muted">
						* kolom wajib terisi semua
						<br>
            			* maksimal ukuran file foto 2 MB
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
