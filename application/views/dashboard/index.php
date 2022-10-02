<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<?php $this->load->view('_partials/header') ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <?php $this->load->view('_partials/navbar') ?>

        <?php $this->load->view('_partials/sidebar') ?>

        <div class="content-wrapper">
            <section class="content-header"> </section>
            <section class="content">
                <main>
                    <div class="container-fluid">
                        <?php $this->load->view($content); ?>
                    </div>
                </main>
            </section>
        </div>
        <?php $this->load->view('_partials/modal') ?>

        <?php $this->load->view('_partials/footer') ?>

        <?php $this->load->view('_partials/js') ?>
        
        <?php $this->load->view('_partials/ajax') ?>
</body>
</html>