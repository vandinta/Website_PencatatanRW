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

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->
		<br>
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-primary o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-user-tie"></i>
						</div>
						<div class="mr-10">Jumlah Kepala Keluarga</div>
						<div class="mr-10">Yang Terdata : <?php echo $this->db->count_all('tb_kepalakeluarga'); ?></div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/KepalaKeluarga/index') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
							<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-warning o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-users"></i>
						</div>
						<div class="mr-10">Jumlah Keluarga</div>
						<div class="mr-10">Yang Terdata : <?php echo $this->db->count_all('tb_anggotakeluarga'); ?></div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/AnggotaKeluarga/index') ?>">
						<span class="float-left">View Details</span>
						<span class="float-right">
							<i class="fas fa-angle-right"></i>
						</span>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-clipboard-list"></i>
				</div>
				<div class="mr-10">Jumlah Keluarga Tidak</div>
				<div class="mr-10">Mampu Yang Terdata : <?php echo $this->db->count_all('tb_keluargatidakmampu'); ?></div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/KeluargaTidakMampu/index') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
					<div class="card-body">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-dollar-sign"></i>
					</div>
					<div class="mr-10">Jumlah Anak Penerima</div>
					<div class="mr-10">Bantuan Yang Terdata : <?php echo $this->db->count_all('tb_anakpenerimabantuan'); ?></div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/AnakPenerimaBantuan/index') ?>">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fas fa-angle-right"></i>
					</span>
					</a>
				</div>
			</div>
		</div>
		<div>
			<script src="<?php echo base_url()?>/assets/chart/Chart.js"></script>
			<br>
			<center><h4>Grafik Jenis Penerima Bantuan</h4></center>
			<canvas id="myChart"></canvas>
				<?php
				//Inisialisasi nilai variabel awal
				$Bantuan= "";
				$jumlah=null;
				foreach ($hasil as $item) 
				{
					$tgl=$item->jenis_bantuan;
					$Bantuan .= "'$tgl'". ", ";
					$jum=$item->total;
					$jumlah .= "$jum". ", ";
				}
				?>
			<script>
				var ctx = document.getElementById('myChart').getContext('2d');
				var chart = new Chart(ctx, {
					// The type of chart we want to create
					type: 'bar',
					// The data for our dataset
					data: {
						labels: [<?php echo $Bantuan; ?>],
						datasets: [{
							label:'Jumlah Penerima Bantuan',
							backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
							borderColor: ['rgb(255, 99, 132)'],
							data: [<?php echo $jumlah; ?>]
						}]
					},
					// Configuration options go here
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
			</script>
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
    
</body>
</html>
