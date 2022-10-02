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
    <div class="card-header">Edit Data Nomor Surat
        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?= site_url('usurat'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= $action; ?>" method="post">
                    <div class="form-group">
                        <label>Jenis Penomoran</label>
                        <select class="form-control select2" style="width: 100%;" name="id_jenis_nomor" required>
                            <option value="<?= isset($surat['id_jenis_nomor']) ? $surat['id_jenis_nomor'] : NULL ?>" selected="selected"><?= isset($surat['nama_pen']) ? $surat['nama_pen'] : NULL ?></option>
                            <?php foreach ($jenis_nomor as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_pen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kegiatan</label>
                        <select class="form-control select2" style="width: 100%;" name="id_kegiatan" id="kegiatan" required>
                            <option value="<?= isset($surat['id_kegiatan']) ? $surat['id_kegiatan'] : NULL ?>" selected="selected"><?= isset($surat['nama_keg']) ? $surat['nama_keg'] : NULL ?></option>
                            <?php foreach ($kegiatan as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nama_keg'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Kegiatan</label>
                        <select class="form-control select2" style="width: 100%;" name="id_sub_kegiatan" id="sub_kegiatan" required>
                            <option value="<?= isset($surat['id_sub_kegiatan']) ? $surat['id_sub_kegiatan'] : NULL ?>" selected="selected"><?= isset($surat['nama_subkeg']) ? $surat['nama_subkeg'] : NULL ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Belanja</label>
                        <input type="text" name="belanja" class="form-control" placeholder="Inputkan Jenis Belanja" value="<?= isset($surat['belanja']) ? $surat['belanja'] : NULL ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Anggaran</label>
                        <input type="number" name="nilai_anggaran" class="form-control" placeholder="Jumlah Anggaran" value="<?= isset($surat['nilai_anggaran']) ? $surat['nilai_anggaran'] : NULL ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kode RUP</label>
                        <input type="text" name="kode_rup" class="form-control" placeholder="Inputkan Kode RUP" value="<?= isset($surat['kode_rup']) ? $surat['kode_rup'] : NULL ?>" required>
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
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Inputkan Nama Perusahaan" value="<?= isset($surat['nama_perusahaan']) ? $surat['nama_perusahaan'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_dr" class="form-control" placeholder="Inputkan Nama Data Rekanan" value="<?= isset($surat['nama_dr']) ? $surat['nama_dr'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" placeholder="Inputkan Jabatan" value="<?= isset($surat['jabatan']) ? $surat['jabatan'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Inputkan Alamat" value="<?= isset($surat['alamat']) ? $surat['alamat'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" name="npwp" class="form-control" placeholder="Inputkan NPWP" value="<?= isset($surat['npwp']) ? $surat['npwp'] : NULL ?>" required>
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
                    <input type="date" name="tgl_sppbj" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_sppbj']) ? $surat['tgl_sppbj'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Surat Pesanan</label>
                    <input type="date" name="tgl_sp" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_sp']) ? $surat['tgl_sp'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Hasil Pemeriksaan</label>
                    <input type="date" name="tgl_bahp" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_bahp']) ? $surat['tgl_bahp'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Serah Terima Hasil Pekerjaan</label>
                    <input type="date" name="tgl_basthp" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_basthp']) ? $surat['tgl_basthp'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Serah Terima Hasil Pekerjaan Ke Pengurus Barang</label>
                    <input type="date" name="tgl_basthp_pengurus" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_basthp_pengurus']) ? $surat['tgl_basthp_pengurus'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Nomor Berita Acara Penerimaan Barang Ke Pengurus Barang</label>
                    <input type="date" name="tgl_bapb_pengurus" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_bapb_pengurus']) ? $surat['tgl_bapb_pengurus'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Penyelesain Pekerjaan</label>
                    <input type="date" name="tgl_bapp" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_bapp']) ? $surat['tgl_bapp'] : NULL ?>" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Berita Acara Pembayaran</label>
                    <input type="date" name="tgl_bap" class="form-control" placeholder="Inputkan Tanggal" value="<?= isset($surat['tgl_bap']) ? $surat['tgl_bap'] : NULL ?>" required>
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