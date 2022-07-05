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
						<a class="btn btn-primary" href="<?php echo site_url('admin/AnggotaKeluarga/relasi') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>ID Kepala Keluarga</th>
										<th>Nama Kepala Keluarga</th>
										<th>Nama Istri</th>
										<th>Nama Anak Pertama</th>
										<th>Nama Anak Kedua</th>
										<th>Tambahan Anggota Keluarga</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($AnggotaKeluarga as $angkeluarga) : ?>
										<tr>
											<td class="10">
												<?php echo $no++ ?>
											</td>
											<td class="150">
												<?php echo $angkeluarga->kepalakeluarga ?>
											</td>
											<td class="150">
												<?php echo $angkeluarga->nama_kepalakeluarga ?>
											</td>
											<td width="150">
												<?php echo $angkeluarga->nama_istri ?>
											</td>
											<td width="150">
												<?php echo $angkeluarga->nama_anak_pertama ?>
											</td>
											<td width="150">
												<?php echo $angkeluarga->nama_anak_kedua ?>
											</td>
											<td width="150">
												<?php echo $angkeluarga->tambahan_anggotakeluarga ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/AnggotaKeluarga/edit/' . $angkeluarga->id_anggotakeluarga) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/AnggotaKeluarga/delete/' . $angkeluarga->id_anggotakeluarga) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
