<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?> | <?= $subtitle ?></title>
    <meta content="" name="description">

    <meta content="" name="keywords">

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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Atur Sistem Sekolah Lebih Mudah dengan SPONS</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"><span>&#9745;</span> Menjawab Semua Kebutuhan Sekolah <br>
                        <span>&#9745;</span> Akses Mudah <br>
                        <span>&#9745;</span> Biaya Murah
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Coba Sekarang</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('Template') ?>/assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2><b>KEUNGGULAN</b></h1>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?= base_url('Template') ?>/assets/img/values-1.png" class="img-fluid" alt="">
                            <h3>User Friendly</h3>
                            <p>SPONS didesain untuk kenyamanan pengguna serta dapat di gunakan pada mobile</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?= base_url('Template') ?>/assets/img/values-2.png" class="img-fluid" alt="">
                            <h3>Berbasis Web</h3>
                            <p>SPONS merupakan web aplikasi yang sangat mudah dioperasikan di mana saja tanpa memerlukan instalasi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="<?= base_url('Template') ?>/assets/img/values-3.png" class="img-fluid" alt="">
                            <h3>Low Cost</h3>
                            <p>SPONS memberikan biaya murah dengan banyak fitur</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h1><b>Apa Itu SPONS ?</b></h1>
                            <p>
                                SPONS adalah aplikasi berbasis web yang dirancang untuk menangani proses pengeloaan data akademik dan data terkait lainnya, sehingga seluruh proses kegiatan akademik dapat terkelola menjadi informasi yang bermanfaat dalam pengelolaan manajemen perguruan tinggi, pengambilan keputusan serta pelaporan di lingkungan perguruan tinggi.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url('Template') ?>/assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #07d5c0;">Demo</h3>
                            <div class="price"><sup>Rp</sup>Free <span> / Month </span></div>
                            <img src="<?= base_url('Template') ?>/assets/img/pricing-free.png" class="img-fluid" alt="">
                            <ul>
                                <li>Pendaftar 5 orang</li>
                            </ul>
                            <br>
                            <br>
                            <a href="<?= base_url('Register') ?>" class="btn-buy">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Fitur 1</h3>
                            <div class="price"><sup>Rp</sup>500.000<span> / Year</span></div>
                            <img src="<?= base_url('Template') ?>/assets/img/pricing-starter.png" class="img-fluid" alt="">
                            <ul>
                                <li>Kuota 50 Siswa</li>
                            </ul>
                            <a href="<?= base_url('Register') ?>" class="btn-buy">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #ff901c;">Fitur 2</h3>
                            <div class="price"><sup>Rp</sup>1.000.000<span> / Year</span></div>
                            <img src="<?= base_url('Template') ?>/assets/img/pricing-business.png" class="img-fluid" alt="">
                            <ul>
                                <li>Kuota 500 Siswa </li>
                            </ul>
                            <a href="<?= base_url('Register') ?>" class="btn-buy">Beli Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #ff0071;">Unlimited</h3>
                            <div class="price"><sup>Rp</sup>2.500.000<span> / Year</span></div>
                            <img src="<?= base_url('Template') ?>/assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                            <ul>
                                <li>Kuota Unlimited </li>
                            </ul>
                            <a href="<?= base_url('Register') ?>" class="btn-buy">Beli Sekarang</a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Pricing Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('Template') ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Fahmi Akbar</h4>
                                <span>Project Manager</span>
                                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('Template') ?>/assets/img/team/team-3.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Ricky Darmawan Widjanarko</h4>
                                <span>Web Development</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('Template') ?>/assets/img/team/team-3.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Romy Setya Kusuma Hadi</h4>
                                <span>Design Graphic</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('Template') ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>Rizaldi Hermawan</h4>
                                <span>UI/UX Designer</span>
                                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Malang,<br>Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telpon</h3>
                                    <p>085746916009<br>085746916009</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Senin - Jumat<br>8:00 - 16:00</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

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

</body>

</html>