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

						<a href="<?php echo site_url('admin/UangKas/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($UangKas as $kas) : ?>

						<form action="<?php echo site_url('admin/UangKas/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/UangKas/edit/ID --->
							
							<input type="hidden" name="id_kegiatan" value="<?php echo $kas->id_kegiatan; ?>" />
							
							<div class="form-group">
								<label for="nama_kegiatan">Nama Kegiatan</label>
								<input class="form-control <?php echo form_error('nama_kegiatan') ? 'is-invalid':'' ?>" type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" value="<?php echo $kas->nama_kegiatan; ?>" />
							</div>
							
							<div class="form-group">
								<label for="kategori_kegiatan">Kategori Kegiatan</label>
								<div>
									<input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Kas" <?php echo ($kas->kategori_kegiatan == 'Kas' ? ' checked' : ''); ?>> Kas
									<input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Dana Sosial" <?php echo ($kas->kategori_kegiatan == 'Dana Sosial' ? ' checked' : ''); ?>> Dana Sosial
									<input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Donasi" <?php echo ($kas->kategori_kegiatan == 'Donasi' ? ' checked' : ''); ?>> Donasi
									<input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Bantuan" <?php echo ($kas->kategori_kegiatan == 'Bantuan' ? ' checked' : ''); ?>> Bantuan
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('kategori_kegiatan') ?>
								</div>
							</div>

							<?php
								$penanggung_jawab = explode(' , ', $kas->penanggung_jawab);
							?>

							<div class="form-group">
								<label for="penanggung_jawab">penanggung_jawab</label>
								<div>
									<input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RW" <?php in_array ('Ketua RW', $penanggung_jawab) ? print "checked" : ""; ?>> Ketua RW
									<input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RT-1" <?php in_array ('Ketua RT-1', $penanggung_jawab) ? print "checked" : ""; ?>> Ketua RT-1
									<input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RT-2" <?php in_array ('Ketua RT-2', $penanggung_jawab) ? print "checked" : ""; ?>> Ketua RT-2
									<input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Bendahara" <?php in_array ('Bendahara', $penanggung_jawab) ? print "checked" : ""; ?>> Bendahara
									<input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Sekertaris" <?php in_array ('Sekertaris', $penanggung_jawab) ? print "checked" : ""; ?>> Sekertaris
								</div>
								<div class="invalid-feedback">
									<?php echo form_error('penanggung_jawab') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keterangan">keterangan</label>
								<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="keterangan"><?php echo $kas->keterangan ?></textarea>
								<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
            					<script>CKEDITOR.replace( 'keterangan' );</script>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $kas->tanggal ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kas_masuk">Kas Masuk</label>
								<input class="form-control <?php echo form_error('kas_masuk') ? 'is-invalid':'' ?>" type="number" name="kas_masuk" placeholder="Kas Masuk" value="<?php echo $kas->kas_masuk; ?>" />
							</div>

							<div class="form-group">
								<label for="kas_keluar">Kas Keluar</label>
								<input class="form-control <?php echo form_error('kas_keluar') ? 'is-invalid':'' ?>" type="number" name="kas_keluar" placeholder="Kas Keluar" value="<?php echo $kas->kas_keluar; ?>" />
							</div>

							<div class="form-group">
								<label for="total_kas">Total Kas</label>
								<input class="form-control <?php echo form_error('total_kas') ? 'is-invalid':'' ?>" type="number" name="total_kas" placeholder="Total Kas" value="<?php echo $kas->total_kas; ?>" />
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
