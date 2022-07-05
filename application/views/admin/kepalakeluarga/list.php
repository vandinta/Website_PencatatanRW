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
						<a class="btn btn-primary" href="<?php echo site_url('admin/KepalaKeluarga/input') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kepala Keluarga</th>
										<th>Tanggal Lahir</th>
										<th>Jumlah Anggota Keluarga</th>
										<th>Pekerjaan</th>
										<th>Nomor HP</th>
										<th>Foto KK</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($KepalaKeluarga as $kplkeluarga) : ?>
										<tr>
											<td class="10">
												<?php echo $no++ ?>
											</td>
											<td class="200">
												<?php echo $kplkeluarga->nama_kepalakeluarga ?>
											</td>
											<td width="200">
												<?php echo dateindo($kplkeluarga->tanggal_lahir) ?>
											</td>
											<td width="150">
												<?php echo $kplkeluarga->jumlah_anggotakeluarga ?>
											</td>
											<td width="150">
												<?php echo $kplkeluarga->pekerjaan ?>
											</td>
											<td width="150">
												<?php echo $kplkeluarga->nomor_hp ?>
											</td>
											<td width="150">
												<img src="<?=base_url()?>assets/kk/<?=$kplkeluarga->foto_kk?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
											</td>
											<td width="150">
												<?php echo $kplkeluarga->keterangan ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/KepalaKeluarga/edit/' . $kplkeluarga->id_kepalakeluarga) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/KepalaKeluarga/delete/' . $kplkeluarga->id_kepalakeluarga) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
