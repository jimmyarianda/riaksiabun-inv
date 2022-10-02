<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="login-box">

    <div class="shadow">
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <img width="100px" src="<?= site_url('assets/dist/img/seluma.png'); ?>" style="margin: 0 auto;vertical-align:middle;" />
                </div>
                <strong><p class="login-box-msg">SISTEM INVENTARIS DESA RIAK SIABUN</p></strong>
                <form action="login/process" method="post">
                    <?php
                    if ($this->session->flashdata('error')) {
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <i class="fas fa-exclamation-circle"></i>&nbsp;<?= $this->session->flashdata('error'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="input-group mb-3">
                        <input id="inputUsername" name="usr_username" type="text" class="form-control" placeholder="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="inputPassword" name="usr_password" type="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 d-flex align-items-center justify-content-between mt-4 mb-3">
                            <button type="submit" class="btn btn-success btn-block">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>