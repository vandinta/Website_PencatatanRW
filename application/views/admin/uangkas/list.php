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

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
							<span aria-hidden="true">&times;</span> 
						</button>
					</div>
					<?php $this->session->unset_userdata('success') ?>
				<?php endif; ?>
				
				<?php if ($this->session->flashdata('berhasil')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('berhasil'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
							<span aria-hidden="true">&times;</span> 
						</button>
					</div>
					<?php $this->session->unset_userdata('berhasil') ?>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a class="btn btn-primary" href="<?php echo site_url('admin/UangKas/input') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
						<a class="btn btn-warning ml-2" style="float: right;" href="<?php echo site_url('admin/UangKas/pdf') ?>"><i class="fas fa-file"></i> Export PDF</a>
						<a class="btn btn-danger ml-2" style="float: right;" href="<?php echo site_url('admin/UangKas/print') ?>"><i class="fas fa-print"></i> Print</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kegiatan</th>
										<th>Kategori Kegiatan</th>
										<th>Penanggung Jawab</th>
										<th>Keterangan</th>
										<th>Tanggal</th>
										<th>Kas Masuk</th>
										<th>Kas Keluar</th>
										<th>Total Kas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($UangKas as $kas) : ?>
										<tr>
											<td class="10">
												<?php echo $no++ ?>
											</td>
											<td class="100">
												<?php echo $kas->nama_kegiatan ?>
											</td>
											<td width="100">
												<?php echo $kas->kategori_kegiatan ?>
											</td>
											<td width="100">
												<?php echo $kas->penanggung_jawab ?>
											</td>
											<td width="150">
												<?php echo $kas->keterangan ?>
											</td>
											<td width="100">
												<?php echo dateindo($kas->tanggal) ?>
											</td>
											<td width="100">
												<?php echo rupiah($kas->kas_masuk) ?>
											</td>
											<td width="100">
												<?php echo rupiah($kas->kas_keluar) ?>
											</td>
											<td width="100">
												<?php echo rupiah($kas->total_kas) ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/UangKas/edit/' . $kas->id_kegiatan) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/UangKas/delete/' . $kas->id_kegiatan) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>

</html>
