<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Home</span>
        </a>
    </li>
    <!-- <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Data Kepala Keluarga</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Data Anggota Keluarga</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Data Keluarga Kurang Mampu</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Data Uang Kas</a>
        </div>
    </li> -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'KepalaKeluarga' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/KepalaKeluarga') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Kepala Keluarga</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'AnggotaKeluarga' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/AnggotaKeluarga') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Anggota Keluarga</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'KeluargaTidakMampu' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/KeluargaTidakMampu') ?>">
            <i class="fas fa-fw fa-dizzy"></i>
            <span>Data Keluarga Tidak Mampu</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'AnakPenerimaBantuan' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/AnakPenerimaBantuan') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Anak Penerima Bantuan</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'KasusCovid' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/KasusCovid') ?>">
            <i class="fas fa-fw fa-hospital"></i>
            <span>Data Kasus Covid</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'UangKas' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/UangKas') ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Data Uang Kas</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'User' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/User') ?>">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Users</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li> -->
</ul>
