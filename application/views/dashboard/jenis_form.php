<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= site_url('jenis'); ?>">Jenis Barang</a></li>
    <li class="breadcrumb-item active"><?= $form_title; ?></li>
</ol>

<div class="card card-default">
    <!-- card-header -->
    <div class="card-header">Tambah Jenis Barang
        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('jenis'); ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= site_url("jenis/add") ?>" method="post">
                    <div class="form-group">
                        <label>Nama Jenis</label>
                        <input type="text" name="nama_jen" class="form-control" placeholder="Inputkan Nama Jenis" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Jenis</label>
                        <input type="text" name="deskripsi_jen" class="form-control" placeholder="Inputkan Deskripsi Jenis" required>
                    </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>&nbsp;
        <a class="btn btn-primary" href="<?= site_url('jenis'); ?>">Batal</a>
    </div>
    </form>
</div>