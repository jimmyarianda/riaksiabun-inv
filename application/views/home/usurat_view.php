<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1 class="mt-4">Mahasiswa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?=site_url('usurat');?>">Data Nomor Surat</a></li>
    <li class="breadcrumb-item active">Lihat Data Mahasiswa</li>
</ol>

<div class="card mb-3">
    <div class="card-header">Data Surat
        &nbsp;&nbsp;<a class="btn btn-primary btn-sm" href="<?=site_url('usurat');?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless">
                    <tr>
                        <td width="200px">Nomor Surat</td>
                        <td width="5px">:</td>
                        <td class="text-bold"><h4><?=$surat['no_surat'];?></h4></td><?=$surat['no_surat'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Jenis Nomor Surat</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nama_pen'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Kegiatan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nama_keg'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Sub Kegiatan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nama_subkeg'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Belanja</td>
                        <td width="5px">:</td>
                        <td><?=$surat['belanja'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Nilai Anggaran</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nilai_anggaran'];?></td>
                    </tr>
                    <tr>
                        <td width="170px">Kode RUP</td>
                        <td width="5px">:</td>
                        <td><?=$surat['kode_rup'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Nama Perusahaan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nama_perusahaan'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Nama Data Rekanan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['nama_dr'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Jabatan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['jabatan'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Alamat</td>
                        <td width="5px">:</td>
                        <td><?=$surat['alamat'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">NPWP</td>
                        <td width="5px">:</td>
                        <td><?=$surat['npwp'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Surat Permohonan Pemesanan Barang/Jasa Lainnya</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_sppbj'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Surat Pesanan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_sp'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Berita Acara Hasil Pemeriksaan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_bahp'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Berita Acara Serah Terima Hasil Pekerjaan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_basthp'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Berita Acara Serah Terima Hasil Pekerjaan Ke Pengurus Barang</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_basthp_pengurus'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Nomor Berita Acara Penerimaan Barang Ke Pengurus Barang</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_bapb_pengurus'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Berita Acara Penyelesain Pekerjaan</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_bapp'];?></td>
                    </tr>
                    <tr>
                        <td width="200px">Tanggal Berita Acara Pembayaran</td>
                        <td width="5px">:</td>
                        <td><?=$surat['tgl_bap'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>