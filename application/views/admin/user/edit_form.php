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

						<a href="<?php echo site_url('admin/User/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

					<?php foreach ($User as $akun) : ?>

						<form action="<?php echo site_url('admin/User/edit'); ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/User/edit/ID --->
							
							<input type="hidden" name="id" value="<?php echo $akun->user_id; ?>" />
							
							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="Username" value="<?php echo $akun->username; ?>" required/>
							</div>
							
							<div class="form-group">
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="hidden" name="password" placeholder="Password" value="<?php echo $akun->password ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email" name="email" placeholder="Email" value="<?php echo $akun->email ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="full_name">Nama Lengkap</label>
								<input class="form-control <?php echo form_error('full_name') ? 'is-invalid':'' ?>" type="text" name="full_name" placeholder="Nama Lengkap" value="<?php echo $akun->full_name ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('full_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="phone">Nomor HP</label>
								<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" type="text" name="phone" placeholder="Nomor Hp" value="<?php echo $akun->phone ?>" required/>
								<div class="invalid-feedback">
									<?php echo form_error('phone') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					<?php endforeach; ?>

					</div>

					<div class="card-footer small text-muted">
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
