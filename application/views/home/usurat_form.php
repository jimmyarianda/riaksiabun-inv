<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?=site_url('udashboard');?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?=site_url('usurat');?>">Data No Surat</a></li>
    <li class="breadcrumb-item active"><?=$form_title;?></li>
</ol>

<div class="card card-default">
    <!-- card-header -->
    <div class="card-header">Tambah Data Nomor Surat
        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('usurat'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= site_url("usurat/add") ?>" method="post">
                    <div class="form-group">
                        <label>Jenis Penomoran</label>
                        <select class="form-control select2" style="width: 100%;" name="jenis_nomor" required>
                            <option value="" selected="selected">Pilih Jenis Penomoran</option>
                            <?php foreach ($jenis_nomor as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_pen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kegiatan</label>
                        <select class="form-control select2" style="width: 100%;" name="kegiatan" id="kegiatan" required>
                            <option value="" selected="selected">Pilih Jenis Kegiatan</option>
                            <?php foreach ($kegiatan as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_keg'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Kegiatan</label>
                        <select class="form-control select2" style="width: 100%;" name="sub_kegiatan" id="sub_kegiatan" required>
                            <option value="" selected="selected">Pilih Jenis Sub Kegiatan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Belanja</label>
                        <input type="text" name="belanja" class="form-control" placeholder="Inputkan Jenis Belanja" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Anggaran</label>
                        <input type="number" name="nilai_anggaran" class="form-control" placeholder="Jumlah Anggaran" required>
                    </div>
                    <div class="form-group">
                        <label>Kode RUP</label>
                        <input type="text" name="kode_rup" class="form-control" placeholder="Inputkan Kode RUP" required>
                    </div>
            </div>
        </div>
    </div>
    <div class="card-footer"></div>

    <div class="card-header">
        <h3 class="card-title">Input Data Rekanan</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Inputkan Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_dr" class="form-control" placeholder="Inputkan Nama Data Rekanan" required>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" placeholder="Inputkan Jabatan" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Inputkan Alamat" required>
                </div>
                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" name="npwp" class="form-control" placeholder="Inputkan NPWP" required>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer"></div>

    <div class="card-header">
        <h3 class="card-title">Input Tanggal Kegiatan</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Surat Permohonan Pesanan Barang/Jasa Lainnya</label>
                    <input type="date" name="tgl_sppbj" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Surat Pesanan</label>
                    <input type="date" name="tgl_sp" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Hasil Pemeriksaan</label>
                    <input type="date" name="tgl_bahp" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Serah Terima Hasil Pekerjaan</label>
                    <input type="date" name="tgl_basthp" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Serah Terima Hasil Pekerjaan Ke Pengurus Barang</label>
                    <input type="date" name="tgl_basthp_pengurus" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Nomor Berita Acara Penerimaan Barang Ke Pengurus Barang</label>
                    <input type="date" name="tgl_bapb_pengurus" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Penyelesain Pekerjaan</label>
                    <input type="date" name="tgl_bapp" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Pembayaran</label>
                    <input type="date" name="tgl_bap" class="form-control" placeholder="Inputkan Tanggal" required>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success" type="submit" name="simpan">Simpan</button>&nbsp;
        <a class="btn btn-primary" href="<?= site_url('usurat'); ?>">Batal</a>
    </div>
    </form>
</div>