<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?= site_url('surat'); ?>">Data User</a></li>
    <li class="breadcrumb-item active"><?= $form_title; ?></li>
</ol>

<?php if ($this->session->flashdata('error')): ?>
    <div id="errorMessage" class="alert alert-danger" role="alert">
        <i class="fas fa-exclamation-circle"></i>&nbsp;<?=$this->session->flashdata('error');?>
    </div>
<?php endif; ?>

<div class="card card-default">
    <!-- card-header -->
    <div class="card-header">Tambah Data User
        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('user'); ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= site_url("user/add") ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="usr_username" class="form-control" placeholder="Inputkan Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="usr_password" class="form-control" placeholder="Inputkan Password" required>
                    </div>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="usr_nama" class="form-control" placeholder="Inputkan Nama User" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control select2" style="width: 100%;" name="usr_level" id="usr_level" required>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>&nbsp;
        <a class="btn btn-primary" href="<?= site_url('user'); ?>">Batal</a>
    </div>
    </form>
</div>