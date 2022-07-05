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

						<a href="<?php echo site_url('admin/KeluargaTidakMampu/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($KeluargaTidakMampu as $kelmam) : ?>

						<form action="<?php echo site_url('admin/KeluargaTidakMampu/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/KeluargaTidakMampu/edit/ID --->
							
							<input type="hidden" name="id" value="<?php echo $kelmam->id_keluarga; ?>" />
							
							<div class="form-group">
								<label for="kepalakeluarga">Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="kepalakeluarga" placeholder="Kepala Keluarga" value="<?php echo $kelmam->kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('kepalakeluarga') ?>
								</div>
							</div>
							
							<!-- <div class="form-group">
								<label for="id_kepalakeluarga">Kepala Keluarga</label>
								<div>
									<select id="id_kepalakeluarga" name="id_kepalakeluarga" class="form-control" required>
										<option value="">Pilih Kepala Keluarga</option>
											<?php foreach ($KepalaKeluarga as $kplkeluarga) : ?>
												<option value="<?php echo $kplkeluarga->id_kepalakeluarga ?>"<?php echo ($kelmam->kepalakeluarga == '<?= $kplkeluarga->nama_kepalakeluarga ?>' ? ' selected' : ''); ?>><?= $kplkeluarga->nama_kepalakeluarga ?> </option>
												<?php endforeach; ?>
											</select>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('id_kepalakeluarga') ?>
								</div>
							</div> -->
							
							<div class="form-group">
								<label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('nama_kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="nama_kepalakeluarga" placeholder="Nama Kepala Keluarga" value="<?php echo $kelmam->nama_kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_kepalakeluarga') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
								<input class="form-control <?php echo form_error('pekerjaan_ayah') ? 'is-invalid':'' ?>" type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $kelmam->pekerjaan_ayah ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan_ayah') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="penghasilan_ayah">Penghasilan Ayah</label>
								<input class="form-control <?php echo form_error('penghasilan_ayah') ? 'is-invalid':'' ?>" type="text" name="penghasilan_ayah" placeholder="Penghasilan Ayah" value="<?php echo $kelmam->penghasilan_ayah ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('penghasilan_ayah') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
								<input class="form-control <?php echo form_error('pekerjaan_ibu') ? 'is-invalid':'' ?>" type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?php echo $kelmam->pekerjaan_ibu ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan_ibu') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="penghasilan_ibu">Penghasilan Ibu</label>
								<input class="form-control <?php echo form_error('penghasilan_ibu') ? 'is-invalid':'' ?>" type="text" name="penghasilan_ibu" placeholder="Penghasilan Ibu" value="<?php echo $kelmam->penghasilan_ibu ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('penghasilan_ibu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jumlah_tanggungan">Tanggungan Keluarga</label>
								<input class="form-control <?php echo form_error('jumlah_tanggungan') ? 'is-invalid':'' ?>" type="text" name="jumlah_tanggungan" placeholder="Tanggungan Keluarga" value="<?php echo $kelmam->jumlah_tanggungan ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('jumlah_tanggungan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					<?php endforeach; ?>

					</div>

					<div class="card-footer small text-muted">
						* jika data tidak ada isikan (-) atau (0)
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
