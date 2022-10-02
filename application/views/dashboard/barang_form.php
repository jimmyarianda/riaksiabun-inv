<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= site_url('barang'); ?>">Barang</a></li>
    <li class="breadcrumb-item active"><?= $form_title; ?></li>
</ol>

<div class="card card-default">
    <!-- card-header -->
    <div class="card-header">Tambah Data Barang
        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('barang'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= site_url("barang/add") ?>" method="post">
                    <div class="form-group">
                        <label>Nama User</label>
                        <select class="form-control select2" style="width: 100%;" name="usr_nama" required>
                            <option value="" selected="selected">Nama User</option>
                            <?php foreach ($user as $row) { ?>
                                <option value="<?= $row['usr_id']; ?>"><?= $row['usr_nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select class="form-control select2" style="width: 100%;" name="nama_jen" required>
                            <option value="" selected="selected">Pilih Jenis Barang</option>
                            <?php foreach ($jenis as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_jen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Satuan Barang</label>
                        <select class="form-control select2" style="width: 100%;" name="nama_sat" required>
                            <option value="" selected="selected">Pilih Satuan Barang</option>
                            <?php foreach ($satuan as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_sat'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" placeholder="Inputkan Jumlah" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" style="width: 100%;" name="status" id="status" required>
                            <option value="masuk">Masuk</option>
                            <option value="keluar">Keluar</option>
                        </select>
                    </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>&nbsp;
        <a class="btn btn-primary" href="<?= site_url('barang'); ?>">Batal</a>
    </div>
    </form>
</div>