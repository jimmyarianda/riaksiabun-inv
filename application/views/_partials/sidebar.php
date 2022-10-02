<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<aside class="main-sidebar sidebar-light-teal elevation-4">
  <!-- Brand Logo/background -->
  <a href="#" class="brand-link navbar-teal">
    <img src="<?= site_url() ?>assets/dist/img/seluma.png" class="brand-image img-circle elevation-2">
    <span class="brand-text font-weight-dark">SIDERS</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a class="fas fa-user">&nbsp;&nbsp;<?= $this->session->userdata('usr_username'); ?></a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- <div class="user-panel mb-3"> -->
          <div class="info mb-2">
            <a class="text-bold">Navigasi Utama</a>
          </div>
          <li class="nav-item has-treeview">
            <?php if ($this->session->userdata('usr_level') === 'Admin') { ?>
              <a class="nav-link <?= $this->uri->segment(1) === 'dashboard' ? 'active' : '' ?>" href="<?= site_url(); ?>">
                <i class="nav-icon fas fa-desktop mr-2"></i>
                <p>
                  Dashboard
                </p>
              </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link <?= $this->uri->segment(1) === 'jenis' ? 'active' : '' ?>" href="<?= site_url('jenis'); ?>">
              <i class="nav-icon fas fa-box mr-2"></i>
              <p>
                Jenis
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(1) === 'satuan' ? 'active' : '' ?>" href="<?= site_url('satuan'); ?>">
              <i class="nav-icon fas fa-box mr-2"></i>
              <p>
                Satuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(1) === 'barang' ? 'active' : '' ?>" href="<?= site_url('barang'); ?>">
              <i class="nav-icon fas fa-boxes mr-2"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          
        <!-- <div class="user-panel mb-3"> -->
          <div class="info mb-2">
            <a class="text-bold">Pengaturan</a>
          </div>
          <li class="nav-item has-treeview">
            <a class="nav-link <?= $this->uri->segment(1) === 'user' ? 'active' : '' ?>" href="<?= site_url('user'); ?>">
              <i class="nav-icon fas fa-user-cog mr-2"></i>
              <p>
                Manajemen User
              </p>
            </a>
          </li>
      <?php } elseif ($this->session->userdata('usr_level') === 'User') { ?>
        <li class="nav-item has-treeview">
          <a class="nav-link <?= $this->uri->segment(1) === 'udashboard' ? 'active' : '' ?>" href="<?= site_url('udashboard'); ?>">
            <i class="nav-icon fas fa-desktop mr-2"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a class="nav-link <?= $this->uri->segment(1) === 'usurat' ? 'active' : '' ?>" href="<?= site_url('usurat'); ?>">
            <i class="nav-icon fas fa-book-open mr-2"></i>
            <p>
              Data Nomor Surat
            </p>
          </a>
        </li>
      <?php } ?>
      </ul>
    </nav>
  </div>
</aside>