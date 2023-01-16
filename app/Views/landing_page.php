<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SBL - Stream Basketball League</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets_index/img/favicon.png" rel="icon">
  <link href="assets_index/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_index/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_index/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_index/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_index/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_index/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_index/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_index/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_index/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Stream Basketball League</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href=<?= base_url('login')?>>Masuk</a></li>
        </ul>
        <br>
        <ul>
          <li><a class="getstarted scrollto" href=<?= base_url('register')?>>Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Tonton laga basket kesukaan mu,</h1>
          <h2>dan lebih banyak lagi</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">MULAI</a>
            <a href="https://www.youtube.com/watch?v=IpSXB70HIwI" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Opening SBL</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_index/img/hero-img1.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets_index/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->
	<!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Dapatkan beberapa layanan yang sudah kita siapkan untukmu!</p>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Semua tentang Basket</a></h4>
              <p>Dapatkan informasi tentang liga basket se-Indonesia!</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Selalu terkini</a></h4>
              <p>Dapatkan informasi paling terkini tentang liga basket se-Indonesia!</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-camera"></i></div>
              <h4><a href="">Siaran Langsung</a></h4>
              <p>Nikmati siaran langsung dari pertandingan basket dengan fitur premium!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>SBL</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Tonton Liga Basket sesuka-mu!
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Promo khusus dengan berlangganan selama satu event!</li>
              <li><i class="ri-check-double-line"></i> Penawaran harga terbaik</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Jangan sampai kelewatan liga basket kesukaanmu!
            </p>
            <a href="<?= base_url('register')?>" class="btn-learn-more">Mulai Berlangganan</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Ayo berlangganan!</h3>
            <p>Berlangganan dan dapatkan fitur menarik kami dan dapatkan potongan untuk minggu ini!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Mulai Berlangganan</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets_index/img/team/ajeng.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ajeng Niarti</h4>
                <span>Mahasiswa STIKI Malang</span>
                <p>Mahasiswa yang sedang menempuh S1 Teknik Informatika di Stiki Malang.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets_index/img/team/vanessa.png" class="img-fluid" alt=""></div>
              <div class="member-info">
				<h4>Vanessa Galih Prisaghea</h4>
				<span>Mahasiswa STIKI Malang</span>
                <p>Mahasiswa yang sedang menempuh S1 Teknik Informatika di Stiki Malang.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets_index/img/team/ricky.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ricky Sebastian Irawan</h4>
                <span>Mahasiswa STIKI Malang</span>
				<p>Mahasiswa yang sedang menempuh S1 Teknik Informatika di Stiki Malang.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Gratis-an</h3>
              <h4><sup>Rp</sup>0<span>per hari</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Live Score</li>
                <li><i class="bx bx-check"></i>Klasemen</li>
                <li class="na"><i class="bx bx-x"></i> <span>Tayang langsung</span></li>
				<li class="na"><i class="bx bx-x"></i> <span>Rekaman Ulang</span></li>
              </ul>
              <a href="<?= base_url('register')?>" class="buy-btn">Mulai</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Hari-an aja</h3>
              <h4><sup>Rp</sup>5.000<span>per hari</span></h4>
              <ul>
			  	<li><i class="bx bx-check"></i> Live Score</li>
                <li><i class="bx bx-check"></i> Klasemen</li>
                <li><i class="bx bx-check"></i>Tayangan Langsung</span></li>
				<li class="na"><i class="bx bx-x"></i> <span>Rekaman Ulang</span></li>
              </ul>
              <a href="<?= base_url('register')?>" class="buy-btn">Mulai</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Satu Event dong</h3>
              <h4><sup>Rp</sup>20.000<span>per event</span></h4>
              <ul>
			  	<li><i class="bx bx-check"></i> Live Score</li>
                <li><i class="bx bx-check"></i> Klasemen</li>
                <li><i class="bx bx-check"></i> Tayangan Langsung</li>
                <li><i class="bx bx-check"></i> Rekaman Ulang</li>
              </ul>
              <a href="<?= base_url('register')?>" class="buy-btn">Mulai</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jalan Raya Tidar 100 Malang</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>201111035@mhs.stiki.ac.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call</h4>
                <p>+62-812-3394-2852</p>
              </div>

              <iframe src="https://maps.google.com/maps?q=Jalan%20Raya%20Tidar%20100%20Malang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subyek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">x
        Designed by <a href="#">STIKI</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_index/vendor/aos/aos.js"></script>
  <script src="assets_index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_index/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_index/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_index/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_index/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets_index/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_index/js/main.js"></script>

</body>

</html>