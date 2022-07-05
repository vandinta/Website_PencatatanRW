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

						<a href="<?php echo site_url('admin/AnakPenerimaBantuan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($AnakPenerimaBantuan as $anak) : ?>

						<form action="<?php echo site_url('admin/AnakPenerimaBantuan/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/KepalaKeluarga/edit/ID --->
							
							<input type="hidden" name="id" value="<?php echo $anak->id_anak; ?>" />
							
							<div class="form-group">
								<label for="nama_lengkap">Nama Lengkap</label>
								<input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>" type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $anak->nama_lengkap; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_lengkap') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kepalakeluarga">Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="kepalakeluarga" placeholder="Kepala Keluarga" value="<?php echo $anak->kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('kepalakeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
								<input class="form-control <?php echo form_error('nama_kepalakeluarga') ? 'is-invalid':'' ?>" type="readonly" name="nama_kepalakeluarga" placeholder="nama_kepala Keluarga" value="<?php echo $anak->nama_kepalakeluarga; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_kepalakeluarga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_ibu">Nama Ibu</label>
								<input class="form-control <?php echo form_error('nama_ibu') ? 'is-invalid':'' ?>" type="text" name="nama_ibu" placeholder="Nama Ibu" value="<?php echo $anak->nama_ibu; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_ibu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $anak->tempat_lahir; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $anak->tanggal_lahir ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_lahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="prestasi">Prestasi</label>
								<input class="form-control <?php echo form_error('prestasi') ? 'is-invalid':'' ?>" type="text" name="prestasi" placeholder="Prestasi" value="<?php echo $anak->prestasi; ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('prestasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenjang_pendidikan">Jenjang Pendidikan</label>
								<div>
									<input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SD" <?php echo ($anak->jenjang_pendidikan == 'SD' ? ' checked' : ''); ?>> SD
									<input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SMP" <?php echo ($anak->jenjang_pendidikan == 'SMP' ? ' checked' : ''); ?>> SMP
									<input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SMA" <?php echo ($anak->jenjang_pendidikan == 'SMA' ? ' checked' : ''); ?>> SMA
									<input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="Kuliah" <?php echo ($anak->jenjang_pendidikan == 'Kuliah' ? ' checked' : ''); ?>> Kuliah
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenjang_pendidikan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_bantuan">Jenis Bantuan</label>
								<div>
									<select name="jenis_bantuan">
										<option value="Prestasi" <?php echo ($anak->jenis_bantuan == 'Prestasi' ? ' selected' : ''); ?>>Prestasi</option>
										<option value="Dana Bos" <?php echo ($anak->jenis_bantuan == 'Dana Bos' ? ' selected' : ''); ?>>Dana Bos</option>
										<option value="KIP" <?php echo ($anak->jenis_bantuan == 'KIP' ? ' selected' : ''); ?>>KIP</option>
										<option value="KIP Kuliah" <?php echo ($anak->jenis_bantuan == 'KIP Kuliah' ? ' selected' : ''); ?>>KIP Kuliah</option>
									</select>
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_bantuan') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="jumlah_saudara">Jumlah Saudara</label>
								<input class="form-control <?php echo form_error('jumlah_saudara') ? 'is-invalid':'' ?>" type="text" name="jumlah_saudara" placeholder="Jumlah Saudara" value="<?php echo $anak->jumlah_saudara ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('jumlah_saudara') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="foto_formal">Foto Formal</label>
								<div><img src="<?php echo base_url('./assets/fotopenerimabantuan/') . $anak->foto_formal?>" border="0" width="70px" height="70px"/></div>
								<input class="form-control <?php echo form_error('foto_formal') ? 'is-invalid' : '' ?>" type="file" name="foto_formal" placeholder="Foto Formal" />
								<input type="hidden" name="fotolama" value="<?php echo $anak->foto_formal; ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto_formal') ?>
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
