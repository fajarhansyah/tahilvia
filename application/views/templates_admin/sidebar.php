<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
                    <?php if($this->session->userdata('username')) { ?>
                    <li>
                      <div> Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                    </li>
                    <li>
                      &nbsp<?php  echo anchor('auth/logout','Logout') ?>
                    </li>
                  <?php } else{ ?>
                    <li><?php echo anchor('auth/login','Login'); ?></li>
                  <?php } ?>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin Hay Clean</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?php base_url() ?>dashboard_admin" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Konfirmasi Pemesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url() ?>menyiapkan_pemesanan" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Menyiapkan Pemesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url() ?>menu_item" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Menu Item
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
