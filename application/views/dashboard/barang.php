<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Dashboard</a></li>
    <li class="breadcrumb-item">Barang</a></li>
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
                <div class="card-header">Tambah Barang
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('barang/add'); ?>"><i class="fas fa-plus"></i>Tambah Data</a>
                    &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('laporan'); ?>"><i class="fas fa-print"></i>Print</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tbarang" class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id</th>
                                    <th>Nama User</th>
                                    <th>Jenis Barang</th>
                                    <th>Satuan Barang</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
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