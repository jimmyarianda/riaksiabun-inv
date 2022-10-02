<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>LAPORAN BARANG RIAK SIABUN</title> 
</head>

<body>
    <br><br><table class="table">
        <tr>
            <th>No</th>
            <th>Jenis Barang</th>
            <th>Satuan Barang</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $br) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $br['nama_jen'] ?></td>
                <td><?= $br['nama_sat'] ?></td>
                <td><?= $br['jumlah'] ?></td>
                <td><?= $br['status'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
<script>
    window.print();
</script>

</html>

<!-- <body>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Barang</th>
                                        <th>Satuan Barang</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.print();
    </script>
</body> -->