<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - SIDKO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= site_url() ?>assets/dist/img/seluma.png" rel="icon">

    <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <main>
        <?php $this->load->view($content); ?>
    </main>

    <script src="<?= site_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= site_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= site_url() ?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>