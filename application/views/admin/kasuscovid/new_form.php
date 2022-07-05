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

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/KasusCovid/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/KasusCovid/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="id_kasus">Id Kasus</label>
                <input class="form-control" type="text" name="id_kasus" placeholder="Id Kasus" required/>
              </div>

              <div class="form-group">
                <label for="nama_warga">Nama Warga</label>
                <input class="form-control" type="text" name="nama_warga" placeholder="Nama Warga" required/>
              </div>
              
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div>
                  <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                  <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </div>
              </div>
              
              <div class="form-group">
                <label for="usia">Usia</label>
                <input class="form-control" type="number" name="usia" placeholder="Usia" required/>
              </div>
              
              <div class="form-group">
                <label for="jenis_konfirmasi">Jenis Konfirmasi</label>
                <div>
                  <label><input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="ODP"> ODP</label>
                  <label><input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="PDP"> PDP</label>
                  <label><input type="radio" name="jenis_konfirmasi" id="jenis_konfirmasi" value="OTG"> OTG</label>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal_konfirmasi">Tanggal Konfirmasi</label>
                <input class="form-control" type="date" name="tanggal_konfirmasi" placeholder="Tanggal Konfirmasi" required/>
              </div>
              
              <div class="form-group">
                <label for="gejala">Gejala</label>
                <div>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="Demam"> Demam</label>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="Pusing"> Pusing</label>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="Mual"> Mual</label>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="Batuk"> Batuk</label>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="Pilek"> Pilek</label>
                  <label><input type="checkbox" id="gejala" name="gejala[]" value="DLL"> DLL</label>
                </div>
              </div>
              
              <div class="form-group">
                <label for="jenis_isolasi">Jenis Isolasi</label>
                <div>
                  <label><input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Rawat Inap"> Rawat Inap</label>
                  <label><input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Rawat Jalan"> Rawat Jalan</label>
                  <label><input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Isolasi Terpadu"> Isolasi Terpadu</label>
                  <label><input type="radio" name="jenis_isolasi" id="jenis_isolasi" value="Isolasi Mandiri"> Isolasi Mandiri</label>
                </div>
              </div>

              <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <input class="form-control" type="text" name="kondisi" placeholder="Kondisi" required/>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

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
