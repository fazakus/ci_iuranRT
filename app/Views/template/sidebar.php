<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="<?= base_url('/'); ?>"><img src="<?= base_url('assets/images/kas.png'); ?>" alt="logo" width='168px' height='48px' /></a>
          <a class="sidebar-brand brand-logo-mini" href="<?= base_url('/'); ?>"><img src="<?= base_url('assets/images/logo-mini.svg'); ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('/'); ?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- start warga -->
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-account-box"></i>
              </span>
              <span class="menu-title">Warga</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/warga'); ?>"><i class="mdi mdi-account-multiple" style="color: blue"></i>&nbsp;&nbsp;Data Warga</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/warga/add'); ?>"><i class="mdi mdi-account-multiple-plus" style="color: green"></i>&nbsp;&nbsp;Tambah Warga</a></li>
              </ul>
            </div>
          </li>
          <!-- end warga -->

          <!-- start iuran -->
          <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#kas" aria-expanded="false" aria-controls="kas">
              <span class="menu-icon">
                <i class="fa-solid fa-money-bill" style="color: cyan"></i>
              </span>
              <span class="menu-title">Iuran Warga</span>
              <i class="menu-arrow"></i>
              </a>
            <div class="collapse" id="kas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class=" nav-link" href="<?= base_url('/iuran'); ?>"><i class="fa-solid fa-money-check-dollar" style="color: blue"></i>&nbsp;&nbsp;Data Iuran Warga</a></li>
                <li class="nav-item"> <a class=" nav-link" href="<?= base_url('/iuran/add'); ?>"><i class="fa-solid fa-money-bill-transfer" style="color: green"></i>&nbsp;&nbsp;Tambah Iuran</a></li>
              </ul>
            </div>
          </li>
          <!-- end warga -->

          <!-- start laporan -->
          <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#laporan" aria-expanded="false" aria-controls="laporan">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Laporan Transaksi</span>
              <i class="menu-arrow"></i>
              </a>
            <div class="collapse" id="laporan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Data Warga Belum Iuran</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Data Jumlah Kas</a></li>
              </ul>
            </div>
          </li>
          <!-- end laporan -->

        </ul>
      </nav>