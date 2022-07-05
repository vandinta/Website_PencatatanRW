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
            <a href="<?php echo site_url('admin/AnakPenerimaBantuan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/AnakPenerimaBantuan/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required/>
              </div>

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
                  <option value="">Pilih Kepala Keluarga</option>
                    <?php foreach ($KepalaKeluarga as $kplkeluarga) : ?>
                      <option value="<?php echo $kplkeluarga->nama_kepalakeluarga ?>"><?= $kplkeluarga->nama_kepalakeluarga ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              
              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input class="form-control" type="text" name="nama_ibu" placeholder="Nama Ibu" required/>
              </div>
              
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required/>
              </div>
              
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required/>
              </div>

              <div class="form-group">
                <label for="prestasi">Prestasi</label>
                <input class="form-control" type="text" name="prestasi" placeholder="Prestasi" required/>
              </div>

              <div class="form-group">
                <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                <div>
                  <label><input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SD"> SD</label>
                  <label><input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SMP"> SMP</label>
                  <label><input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="SMA"> SMA</label>
                  <label><input type="radio" name="jenjang_pendidikan" id="jenjang_pendidikan" value="Kuliah"> Kuliah</label>
                </div>
              </div>

              <div class="form-group">
                <label for="jenis_bantuan">Jenis Bantuan</label>
                <div>
                  <select name="jenis_bantuan" id="jenis_bantuan" required>
                    <option>Pilih Jenis Bantuan</option>
                    <option value="Prestasi">Prestasi</option>
                    <option value="Dana Bos">Dana Bos</option>
                    <option value="KIP">KIP</option>
                    <option value="KIP Kuliah">KIP Kuliah</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="jumlah_saudara">Jumlah Saudara</label>
                <input class="form-control" type="number" name="jumlah_saudara" placeholder="Jumlah Saudara" required/>
              </div>

              <div class="form-group">
                <label for="foto_formal">Foto Formal</label>
                <input class="form-control" type="file" name="foto_formal" placeholder="Foto Formal" required/>
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
