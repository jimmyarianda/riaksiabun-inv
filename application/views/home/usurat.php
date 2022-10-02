<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?=site_url('udashboard');?>">Dashboard</a></li>
    <li class="breadcrumb-item">Data No Surat</a></li>
</ol>

<?php if ($this->session->flashdata('success')): ?>
    <div id="successMessage" class="alert alert-success" role="alert">
        <i class="fas fa-check"></i>&nbsp;<?=$this->session->flashdata('success');?>
    </div>
<?php endif; ?>

<!-- DataTables -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Tambah Data Nomor Surat
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('usurat/add'); ?>"><i class="fas fa-plus"></i> Tambah Data</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-sm" href="<?= site_url('usurat/pdf'); ?>"><i class="fas fa-file"></i> Export PDF</a>               
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tsurat2" class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id</th>
                                    <th>No Surat</th>
                                    <th>Jenis Nomor</th>
                                    <th>Kegiatan</th>
                                    <th width="50%">Sub Kegiatan</th>
                                    <th>Jenis Belanja</th>
                                    <th>Nilai Anggaran</th>
                                    <th>Kode RUP</th>
                                    <th>Nama Perusahaan</th>
                                    <!-- <th>Nama Data Rekanan</th> -->
                                    <!-- <th>Jabatan</th>
                                    <th>Alamat</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <script>
                            function deleteConfirm(url) {
                                $('#btn-delete').attr('href', url);
                                $('#deleteModal').modal();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>