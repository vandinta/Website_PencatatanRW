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

						<a href="<?php echo site_url('admin/KasusCovid/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($KasusCovid as $kasvid) : ?>

						<form action="<?php echo site_url('admin/KasusCovid/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/UangKas/edit/ID --->
							
							<input type="hidden" name="id_kasus" value="<?php echo $kasvid->id_kasus; ?>" />
							
							<div class="form-group">
								<label for="nama_warga">Nama Warga</label>
								<input class="form-control <?php echo form_error('nama_warga') ? 'is-invalid':'' ?>" type="text" name="nama_warga" placeholder="Nama Warga" value="<?php echo $kasvid->nama_warga; ?>" />
							</div>
							
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<div>
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" <?php echo ($kasvid->jenis_kelamin == 'Laki-laki' ? ' checked' : ''); ?>> Laki-laki
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?php echo ($kasvid->jenis_kelamin == 'Perempuan' ? ' checked' : ''); ?>> Perempuan
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="usia">Usia</label>
								<input class="form-control <?php echo form_error('usia') ? 'is-invalid':'' ?>" type="number" name="usia" placeholder="Nama Warga" value="<?php echo $kasvid->usia; ?>" />
							</div>

							<div class="form-group">
								<label for="jenis_konfirmasi">Jenis Konfirmasi</label>
								<div>
									<input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="ODP" <?php echo ($kasvid->jenis_konfirmasi == 'ODP' ? ' checked' : ''); ?>> ODP
									<input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="PDP" <?php echo ($kasvid->jenis_konfirmasi == 'PDP' ? ' checked' : ''); ?>> PDP
									<input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="OTG" <?php echo ($kasvid->jenis_konfirmasi == 'OTG' ? ' checked' : ''); ?>> OTG
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_konfirmasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_konfirmasi">tanggal_konfirmasi</label>
								<input class="form-control <?php echo form_error('tanggal_konfirmasi') ? 'is-invalid':'' ?>"
								type="date" name="tanggal_konfirmasi" placeholder="tanggal_konfirmasi" value="<?php echo $kasvid->tanggal_konfirmasi ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_konfirmasi') ?>
								</div>
							</div>

							<?php
								$gejala = explode(' , ', $kasvid->gejala);
							?>

							<div class="form-group">
								<label for="gejala">Gejala</label>
								<div>
									<input type="checkbox" id="gejala" name="gejala[]" value="Demam" <?php in_array ('Demam', $gejala) ? print "checked" : ""; ?>> Demam
									<input type="checkbox" id="gejala" name="gejala[]" value="Pusing" <?php in_array ('Pusing', $gejala) ? print "checked" : ""; ?>> Pusing
									<input type="checkbox" id="gejala" name="gejala[]" value="Mual" <?php in_array ('Mual', $gejala) ? print "checked" : ""; ?>> Mual
									<input type="checkbox" id="gejala" name="gejala[]" value="Batuk" <?php in_array ('Batuk', $gejala) ? print "checked" : ""; ?>> Batuk
									<input type="checkbox" id="gejala" name="gejala[]" value="Pilek" <?php in_array ('Pilek', $gejala) ? print "checked" : ""; ?>> Pilek
									<input type="checkbox" id="gejala" name="gejala[]" value="DLL" <?php in_array ('DLL', $gejala) ? print "checked" : ""; ?>> DLL
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('gejala') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_isolasi">Jenis Isolasi</label>
								<div>
									<input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Rawat Inap" <?php echo ($kasvid->jenis_isolasi == 'Rawat Inap' ? ' checked' : ''); ?>> Rawat Inap
									<input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Rawat Jalan" <?php echo ($kasvid->jenis_isolasi == 'Rawat Jalan' ? ' checked' : ''); ?>> Rawat Jalan
									<input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Isolasi Terpadu" <?php echo ($kasvid->jenis_isolasi == 'Isolasi Terpadu' ? ' checked' : ''); ?>> Isolasi Terpadu
									<input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Isolasi Mandiri" <?php echo ($kasvid->jenis_isolasi == 'Isolasi Mandiri' ? ' checked' : ''); ?>> Isolasi Mandiri
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_isolasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kondisi">Kondisi</label>
								<input class="form-control <?php echo form_error('kondisi') ? 'is-invalid':'' ?>" type="text" name="kondisi" placeholder="Kondisi" value="<?php echo $kasvid->kondisi; ?>" />
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					<?php endforeach; ?>

					</div>

					<div class="card-footer small text-muted">
						* jika data tidak ada isikan (-)
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
