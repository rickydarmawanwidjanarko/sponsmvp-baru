<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?> | <?= $subtitle ?></title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">

    <!-- Favicons -->
    <link href="<?= base_url('Template') ?>/assets/img/logo.png" rel="icon">
    <link href="<?= base_url('Template') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('Template') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('Template') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('Template') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('Template') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('Template') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('Template') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('Template') ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= base_url('') ?>" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png">
                <span>Spons</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="getstarted scrollto" href="<?= base_url('Auth/login') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br>
    <br>


    <main id="main">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <?php echo form_open_multipart('Register/simpanPendaftaran') ?>
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Registrasi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Sekolah</label>
                                        <input name="nama" value="<?= old('nama') ?>" class="form-control" placeholder="Nama Sekolah">
                                        <p class="text-danger"><?= $validation->hasError('nama') ? $validation->getError('nama') : '' ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="<?= old('email') ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        <p class="text-danger"><?= $validation->hasError('email') ? $validation->getError('email') : '' ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Sekolah</label>
                                        <input name="alamat" value="<?= old('alamat') ?>" class="form-control" placeholder="Alamat Sekolah">
                                        <p class="text-danger"><?= $validation->hasError('alamat') ? $validation->getError('alamat') : '' ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telpon</label>
                                        <input type="telpon" name="no_telp" value="<?= old('no_telp') ?>" class="form-control" id="exampleInputEmail1" placeholder="No Telpon">
                                        <p class="text-danger"><?= $validation->hasError('no_telp') ? $validation->getError('no_telp') : '' ?></p>
                                    </div>

                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input name="kota" value="<?= old('kota') ?>" class="form-control" placeholder="Kota">
                                        <p class="text-danger"><?= $validation->hasError('kota') ? $validation->getError('kota') : '' ?></p>
                                    </div>
                                    <div class="card-body">
                                        <?php echo form_open_multipart('') ?>
                                        <div class="text-left">
                                            <img id="logo" class="img-fluid pad" src="<?= base_url('logo/') ?>" width="250px" height="250px">
                                        </div>
                                        <br>
                                        <div class="from-group">
                                            <label>Upload Logo</label>
                                            <input id="logo" name="logo" type="file" class="from-control" accept="image/*">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-flat btn-primary"> Register</button>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                            </form>
                        </div>
                        <!-- /.card -->
                        <?php echo form_close() ?>
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?= $title ?></span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->

            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('Template') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('Template') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('Template') ?>/assets/js/main.js"></script>

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                }
            });
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

</body>

</html>