<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPID Damkar- Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('home/img/favicon.ico')}}" rel="icon">
  <link href="{{asset('home/img/apple-touch-icon.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('home/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Fire Fighter</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Pengetahuan</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Team</a></li>
          <li class="dropdown"><a href="#"><span>Daftar Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Kirim Pesan</a></li>
          
          </li>
          <li><a class="nav-link scrollto" href="#contact">Komentar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1> Pemilihan Anggota Terbaik Pemadam Kebakaran</h1>
          <h2>Meningkatkan profesionalisme aparatur Dinas Pemadam Kebakaran yang berdedikasi tinggi, peduli serta antisipasif</h2>
          <div><a href="{{ url ('peserta') }}" class="btn-get-started scrollto">SPK</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{asset('home/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{asset('home/img/about.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Fungsi Dinas Pemadam Kebakaran</h3>
            <p class="fst-italic">
            Untuk melaksanakan tugas di atas, Dinas Pemadam Kebakaran Kabupaten Karangasem mempunyai fungsi :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> 1. Perumusan kebijakan di bidang pemadam kebakaran;</li>
              <li><i class="bi bi-check-circle"></i> 2. Pelaksanaan kebijakan di bidang pemadam kebakaran;</li>
              <li><i class="bi bi-check-circle"></i> 3. Pelaksanaan evaluasi dan pelaporan di bidang pemadam kebakaran;</li>
              <li><i class="bi bi-check-circle"></i> 4. Pelaksanaan administrasi Dinas Pemadam Kebakaran Kabupaten Karangasem;</li>
              <li><i class="bi bi-check-circle"></i> 5. Pelaksanaan fungsi lain yang diberikan oleh Bupati terkait dengan tugas dan fungsinya.</li>
            </ul>
            <a href="#" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR TEAM </h2>
          <p></p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Membantu kepala dinas dalam pengelolaan urusan administrasi, keuangan, kepegawaian, ketatausahaan dan pemberian dukungan administrasi  kepada seluruh unit organisasi di lingkungan Dinas Pemadam Kebakaran dan Penyelamatan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Samudra</h3>
                <h4>Sekretariat</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  melakukan monitoring, evaluasi dan pelaporan kegiatan Subbagian Keuangan, Program dan Pelaporan dan melaksanakan tugas-tugas kedinasan lain yang diberikan oleh pimpinan sesuai dengan bidang tugasnya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Damar Subhan</h3>
                <h4>Subbagian Keuangan, Program dan Pelaporan</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kepala Dinas mempunyai tugas membantu Walikota melaksanakan urusan pemerintahan di bidang Ketenteraman dan Ketertiban Umum serta Perlindungan Masyarakat sub Kebakaran yang menjadi kewenangan Kota dan tugas pembantuan yang diberikan kepada Kota.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wiron</h3>
                <h4>Kepala Dinas</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  melakukan koordinasi dan konsultasi dalam rangka tata usaha, rumah tangga, kehumasan, hukum, perlengkapan dan peralatan, kepegawaian, reformasi birokrasi dan pengelolaan aset di  lingkungan  Dinas Pemadam Kebakaran dan Penyela.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>M Bangkit</h3>
                <h4>Subbagian Umum, Kepegawaian dan Aset</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Membantu Kepala Dinas dalam melaksanakan Bidang Urusan Pemerintahan Ketenteraman dan Ketertiban Umum serta Perlindungan Masyarakat sub Kebakaran dibidang Pemadaman dan Penyelematan dan penyiapan bahan penyusunan program kerja.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('home/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>Dodi Setiawan</h3>
                <h4>Bidang Pemadaman dan Penyelamatan</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>KOMENTAR</h2>
          <p></p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">TK Hang Tuah 16 Tegal (04/09/2020 15:24)<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                It was great to accompany the children to visit the fire department office ... the officers were also friendly ... patient with the children ... thank you
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">tablet risto (16/12/2018 14:40) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                good
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Jaenudin Merpati (31/01/2018 06:59) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Armada Pemadam kebakaran siap siaga...
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tani chanel Tentang petani (17/05/2018 00:13) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Terus siaga satu untuk penanggulangan kebakaran..pantang pulang sebelum padam
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kirim Pesan</h2>
          <p></p>
        </div>

        <!-- <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Central Debong, South Tegal, Tegal City, Central Java 52192, Indonesia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>damkartgl@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62 283 325429</p>
            </div>
          </div> 

        </div> -->

        <div class="row">

          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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

    <!-- <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Fire Fighter</h3>
            <p>
            Central Debong, South Tegal <br>
            Tegal City, Central Java 52192<br>
            Indonesia <br><br>
              <strong>Phone:</strong> +62 283 325429<br>
              <strong>Email:</strong> damkartgl@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengetahuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h2>Masukan</h2>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Kirim">
            </form>
          </div>

        </div>
      </div>
    </div> -->

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Fire Fighter</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">siska aulia</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('home/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('home/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('home/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('home/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('home/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('home/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('home/js/main.js')}}"></script>

</body>

</html>