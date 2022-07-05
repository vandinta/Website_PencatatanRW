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

						<a href="<?php echo site_url('admin/AnggotaKeluarga/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($AnggotaKeluarga as $ang) : ?>

						<form action="<?php echo site_url('admin/AnggotaKeluarga/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/AnggotaKeluarga/edit/ID --->
							
							<input type="hidden" name="id" value="<?php echo $ang->id_anggotakeluarga; ?>" />
							
							<div class="form-group">
								<label for="id_kepalakeluarga">Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('id_kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="id_kepalakeluarga" placeholder="Kepala Keluarga" value="<?php echo $ang->kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('id_kepalakeluarga') ?>
								</div>
							</div>
							
							<!-- <div class="form-group">
								<label for="id_kepalakeluarga">Kepala Keluarga</label>
								<div>
									<select id="id_kepalakeluarga" name="id_kepalakeluarga" class="form-control" required>
										<option value="">Pilih Kepala Keluarga</option>
										<?php foreach ($KepalaKeluarga as $kplkeluarga) : ?>
											<option value="<?php echo $kplkeluarga->id_kepalakeluarga ?>"<?php echo ($ang->kepalakeluarga == '<?= $kplkeluarga->nama_kepalakeluarga ?>' ? ' selected' : ''); ?>><?= $kplkeluarga->nama_kepalakeluarga ?> </option>
											<?php endforeach; ?>
									</select>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('id_kepalakeluarga') ?>
								</div>
							</div> -->
							
							<div class="form-group">
								<label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('nama_kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="nama_kepalakeluarga" placeholder="Nama Kepala Keluarga" value="<?php echo $ang->nama_kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_kepalakeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_istri">Nama Istri</label>
								<input class="form-control <?php echo form_error('nama_istri') ? 'is-invalid':'' ?>" type="text" name="nama_istri" placeholder="Nama Istri" value="<?php echo $ang->nama_istri ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_istri') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama_anak_pertama">Nama Anak Pertama</label>
								<input class="form-control <?php echo form_error('nama_anak_pertama') ? 'is-invalid':'' ?>" type="text" name="nama_anak_pertama" placeholder="Nama Anak Pertama" value="<?php echo $ang->nama_anak_pertama ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_anak_pertama') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama_anak_kedua">Nama Anak Kedua</label>
								<input class="form-control <?php echo form_error('nama_anak_kedua') ? 'is-invalid':'' ?>" type="text" name="nama_anak_kedua" placeholder="Nama Anak Kedua" value="<?php echo $ang->nama_anak_kedua ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_anak_kedua') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tambahan_anggotakeluarga">Tambahan Anggota Keluarga</label>
								<textarea class="form-control <?php echo form_error('tambahan_anggotakeluarga') ? 'is-invalid':'' ?>"
								 name="tambahan_anggotakeluarga" placeholder="Tambahan Anggota Keluarga"><?php echo $ang->tambahan_anggotakeluarga ?></textarea>
								<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
            					<script>CKEDITOR.replace( 'tambahan_anggotakeluarga' );</script>
								<div class="invalid-feedback">
									<?php echo form_error('tambahan_anggotakeluarga') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					<?php endforeach; ?>

					</div>

					<div class="card-footer small text-muted">
						* jika data tidak ada isikan (-)
						<br>
						* jika kolom kurang silakan isikan pada kolom tambahan
						<br>
						* kolom wajib terisi semua
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
