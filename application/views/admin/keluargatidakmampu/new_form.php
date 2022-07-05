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
            <a href="<?php echo site_url('admin/KeluargaTidakMampu/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php echo site_url('admin/KeluargaTidakMampu/add'); ?>" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="kepalakeluarga">Kepala Keluarga</label>
                <select id="kepalakeluarga" name="kepalakeluarga" class="form-control" required>
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
                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <input class="form-control" type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required/>
              </div>

              <div class="form-group">
                <label for="penghasilan_ayah">Penghasilan Ayah</label>
                <input class="form-control" type="number" name="penghasilan_ayah" placeholder="Penghasilan Ayah" required/>
              </div>

              <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                <input class="form-control" type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required/>
              </div>

              <div class="form-group">
                <label for="penghasilan_ibu">Penghasilan Ibu</label>
                <input class="form-control" type="number" name="penghasilan_ibu" placeholder="Penghasilan Ibu" required/>
              </div>

              <div class="form-group">
                <label for="jumlah_tanggungan">Tanggungan Keluarga</label>
                <input class="form-control" type="number" name="jumlah_tanggungan" placeholder="Tanggungan Keluarga" required/>
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
