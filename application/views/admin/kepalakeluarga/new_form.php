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
            <a href="<?php echo site_url('admin/KepalaKeluarga/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/KepalaKeluarga/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
                <input class="form-control" type="text" name="nama_kepalakeluarga" placeholder="Nama Kepala Keluarga" required/>
              </div>
              
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required/>
              </div>

              <div class="form-group">
                <label for="jumlah_anggotakeluarga">Jumlah Anggota Keluarga</label>
                <input class="form-control" type="number" name="jumlah_anggotakeluarga" placeholder="Jumlah Anggota Keluarga" required/>
              </div>

              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan" required/>
              </div>

              <div class="form-group">
                <label for="nomor_hp">Nomor HP</label>
                <input class="form-control" type="number" name="nomor_hp" placeholder="Nomor HP" required/>
              </div>

              <div class="form-group">
                <label for="foto_kk">Foto KK</label>
                <input class="form-control" type="file" name="foto_kk" placeholder="Foto KK" required/>
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div class="form-group">
                  <textarea id="keterangan" name="keterangan"></textarea>
                  <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
                  <script>
                    CKEDITOR.replace('keterangan');
                  </script>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

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
