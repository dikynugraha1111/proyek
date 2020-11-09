<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<!-- <link rel="stylesheet" href="/css/cssLogin.css"> -->

<div id="hero" style="padding-top: 80px;">
</div>


<!-- <div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Open Login Modal</a></p>
        </div>
    </div>
</div> -->
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<!-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img class="img-circle" id="img_logo" src="assets/img/sman1.png">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div> -->

<!-- Begin # DIV Form -->
<!-- <div id="div-forms"> -->

<!-- Begin # Login Form -->
<!-- <form id="login-form">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-login-msg">Type your username and password.</span>
                        </div>
                        <input id="login_username" class="form-control" type="text" placeholder="Input Username" required>
                        <input id="login_password" class="form-control" type="password" placeholder="Input Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" style="margin-top: 10px;"> Remember me
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn btn-primary">Login</button>
                        </div>
                        <div>
                            <button id="login_lost_btn" type="button" class="btn btn-danger">Lost Password?</button>
                            <button id="login_register_btn" type="button" class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form> -->
<!-- End # Login Form -->

<!-- Begin | Lost Password Form -->
<!-- <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                        </div>
                    </form> -->
<!-- End | Lost Password Form -->

<!-- Begin | Register Form -->
<!-- <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                        </div>
                    </form> -->
<!-- End | Register Form -->

<!-- </div> -->
<!-- End # DIV Form -->

<!-- </div>
    </div>
</div> -->
<div class="flash-data-login" data-flashdatalogin="<?= session()->getFlashdata('pesan'); ?>"> </div>
<div class="flash-data-log" data-flashdatalog="<?= session()->getFlashdata('success'); ?>"> </div>
<!-- <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?> -->

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent mb-0">
                    <div class="text-center mb-3">
                        <img class="img-circle" id="img_logo" src="assets/img/sman1.png" style="height: 200px;">
                    </div>
                    <h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5>
                </div>
                <div class="card-body">
                    <form action="/Login/auth" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer" style="margin-top: 215px;">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ArsipKita2020</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
            Designed by <a href="https://bootstrapmade.com/">-</a>
        </div>
    </div>
</footer><!-- End Footer -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/package/dist/sweetalert2.all.min.js"></script>
<script src="/package/dist/sweet.js"></script>

<?php $this->endSection('content'); ?>