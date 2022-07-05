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
            <a href="<?php echo site_url('admin/UangKas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/UangKas/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="id_kegiatan">Id Kegiatan</label>
                <input class="form-control" type="text" name="id_kegiatan" placeholder="Id Kegiatan" required/>
              </div>

              <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input class="form-control" type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" required/>
              </div>

              <div class="form-group">
                <label for="kategori_kegiatan">Kategori Kegiatan</label>
                <div>
                  <label><input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Kas"> Kas</label>
                  <label><input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Dana Sosial"> Dana Sosial</label>
                  <label><input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Donasi"> Donasi</label>
                  <label><input type="radio" name="kategori_kegiatan" id="kategori_kegiatan" value="Bantuan"> Bantuan</label>
                </div>
              </div>

              <div class="form-group">
                <label for="penanggung_jawab">Penanggung Jawab</label>
                <div>
                  <label><input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RW"> Ketua RW</label>
                  <label><input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RT-1"> Ketua RT-1</label>
                  <label><input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Ketua RT-2"> Ketua RT-2</label>
                  <label><input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Bendahara"> Bendahara</label>
                  <label><input type="checkbox" id="penanggung_jawab" name="penanggung_jawab[]" value="Sekertaris"> Sekertaris</label>
                </div>
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

              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" placeholder="Tanggal" required/>
              </div>

              <div class="form-group">
                <label for="kas_masuk">Kas Masuk</label>
                <input class="form-control" type="number" name="kas_masuk" placeholder="Kas Masuk" required/>
              </div>

              <div class="form-group">
                <label for="kas_keluar">Kas Keluar</label>
                <input class="form-control" type="number" name="kas_keluar" placeholder="Kas Keluar" required/>
              </div>

              <div class="form-group">
                <label for="total_kas">Total Kas</label>
                <input class="form-control" type="number" name="total_kas" placeholder="Total Kas" required/>
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
