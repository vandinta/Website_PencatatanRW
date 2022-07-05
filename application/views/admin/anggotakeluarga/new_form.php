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
            <a href="<?php echo site_url('admin/AnggotaKeluarga/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/AnggotaKeluarga/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="id_kepalakeluarga">Kepala Keluarga</label>
                <select id="id_kepalakeluarga" name="id_kepalakeluarga" class="form-control" required>
                  <option value="">Pilih Kepala Keluarga</option>
                    <?php foreach ($KepalaKeluarga as $kplkeluarga) : ?>
                      <option value="<?php echo $kplkeluarga->id_kepalakeluarga ?>"><?= $kplkeluarga->nama_kepalakeluarga ?></option>
                    <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nama_kepalakeluarga">Nama Kepala Keluarga</label>
                <select id="nama_kepalakeluarga" name="nama_kepalakeluarga" class="form-control" required>
                  <option value="">Pilih Nama Kepala Keluarga</option>
                    <?php foreach ($KepalaKeluarga as $kplkeluarga) : ?>
                      <option value="<?php echo $kplkeluarga->nama_kepalakeluarga ?>"><?= $kplkeluarga->nama_kepalakeluarga ?></option>
                    <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nama_istri">Nama Istri</label>
                <input class="form-control" type="text" name="nama_istri" placeholder="Nama Istri" required/>
              </div>

              <div class="form-group">
                <label for="nama_anak_pertama">Nama Anak Pertama</label>
                <input class="form-control" type="text" name="nama_anak_pertama" placeholder="Nama Anak Pertama" required/>
              </div>

              <div class="form-group">
                <label for="nama_anak_kedua">Nama Anak Kedua</label>
                <input class="form-control" type="text" name="nama_anak_kedua" placeholder="Nama Anak Kedua" required/>
              </div>

              <div class="form-group">
                <label for="tambahan_anggotakeluarga">Tambahan Anggota Keluarga</label>
                <div class="form-group">
                  <textarea id="tambahan_anggotakeluarga" name="tambahan_anggotakeluarga"></textarea>
                  <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
                  <script>
                    CKEDITOR.replace('tambahan_anggotakeluarga');
                  </script>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * jika data tidak ada isikan (-)
            <br>
            * jika kolom kurang silakan isikan pada kolom tambahan
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
