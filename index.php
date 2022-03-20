<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDBACOMNET</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-front/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <a href="" class="logo">EDBACOMNET</a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto" role="button" onclick="login()">Login</a></li>
          <li><a class="nav-link scrollto" role="button" onclick="register()">Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat Datang Di Aplikasi EDBACOMNET</h1>
          <h2>Aplikasi EDBACOMNET Adalah Aplikasi Berbasis Learning Dengan Metode Pembelajaran Yang Sangan Asik Dan Gampang Untuk Dipahami.</h2>
          <div><a role="button" onclick="login()" class="btn-get-started scrollto">Coba Sekarang</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
            <a href="" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Tentang Kami</h3>
            <p>Aplikasi EDBACOMNET Adalah Aplikasi Berbasis Learning Dengan Metode Pembelajaran Yang Sangan Asik Dan Gampang Untuk Dipahami..</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Materi</a></h4>
              <p class="description">Materi Yang Membahasan Seputar Teknologi</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Metode</a></h4>
              <p class="description">Metode Pembelajaran Yang Asik</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Pengalaman</a></h4>
              <p class="description">Pengalaman Dalam Menganalisa Suatu Permasalahan</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Layanan Yang Disediakan Oleh Aplikasi EDBACOMNET :</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-credit-card-2-front" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>kontak Admin</h2>
          <p>Silahkian Tinggalkan Pesan Untuk Admin.</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-8 mt-5 mt-lg-0 mx-auto">

            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">PEsan Kamu Telah Dikirim. Terimakasih.</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright .
      </div>
      <div class="credits">
        Designed by <a href="">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- login -->
  <div class="modal" id="login">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="border-radius:15px">

        <!-- Modal Header -->
        <form action="login.php" method="post">
          <div class="modal-body">
            <center>
              <h4>Login</h4>
            </center>
            <hr>
            <div class="form-group">
              <label for="">NIS</label>
              <input type="number" name="nis" class="form-control" placeholder="xxx">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control" placeholder="xxx">
            </div>
            <span>Belum Punya Akun? <a role="button" onclick="register()" style="color:blue">Daftar Disini</a></span>
            <hr>
            <div align="right">
              <button type="button" class="btn btn-danger" onclick="tutup()">Tutup</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- login -->

  <!-- register -->
  <div class="modal" id="register">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="border-radius:15px">

        <!-- Modal Header -->
        <form action="register.php" method="post">
          <div class="modal-body">
            <center>
              <h4>Register</h4>
            </center>
            <hr>
            <div class="form-group">
              <label for="">NIS</label>
              <input type="number" name="nis" class="form-control" placeholder="xxx">
            </div>
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" placeholder="xxx">
            </div>
            <div class="form-group">
              <label for="">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control" placeholder="xxx">
            </div>
            <div class="form-group">
              <label for="">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="" class="form-control">
                <option value="">-PILIH-</option>
                <option value="1">Laki-laki</option>
                <option value="1">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">No Telpon</label>
              <input type="number" name="telpon" class="form-control" placeholder="xxx">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control" placeholder="xxx">
            </div>
            <span>Sudah Punya Akun? <a role="button" onclick="login()" style="color:blue">Login</a></span>
            <hr>
            <div align="right">
              <button type="button" class="btn btn-danger" onclick="tutupp()">Tutup</button>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- register -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function login() {
      $('#login').modal('show');
      $('#register').modal('hide');
    }

    function tutup() {
      $('#login').modal('hide');
    }

    function register() {
      $('#register').modal('show');
      $('#login').modal('hide');
    }

    function tutupp() {
      $('#register').modal('hide');
    }
  </script>
</body>

</html>