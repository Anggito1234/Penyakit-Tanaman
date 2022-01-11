<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="Home/images/Swimming Instructor-crop.ico" type="">

  <title> BB Green House </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="Home/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="Home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="Home/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="Home/images/penyakitTanaman.jpg" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span style="color: black;">
              BB Green House
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#" style="color: black;">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <?php if(session()->get('logged_in') == true) : ?>
                <a class="nav-link" href="/konsultasi" style="color: black;">Konsultasi</a>
                <?php else: ?>
                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal" style="color: black;">Konsultasi</a>  
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Login Terlebih Dahulu</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <div class="alert alert-primary" role="alert">
                        Maaf, Konsultasi membutuhkan data anda ! <a href="/Login"> Login Masuk</a>
                      </div>
                    </div>
                  </div>
                <?php endif ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop" style="color: black;">Toko</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang" style="color: black;"> Tentang</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="departments.html">Fitur</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#pengelola" style="color: black;">Pengelola</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact" style="color: black;">Kontak</a>
              </li>
              <form class="form-inline">
                <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button> -->
                <?php if (session()->get('logged_in') == true) : ?>
                  <div class="dropdown show">
                    <a style="color: black;" href="#" class="my-2 my-sm-0 dropdown-toggle" style="color: aliceblue;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user" aria-hidden="true"> <?= session()->get('username'); ?></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Profile</a>
                      <!-- <a class="dropdown-item" href="#">Chart</a> -->
                      <a class="dropdown-item" href="/Login/logout">Logout</a>
                    </div>
                  </div>
                <?php else : ?>
                  <a style="color: black;" href="Login" class="my-2 my-sm-0" style="color: aliceblue;">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Masuk
                  </a>
                <?php endif ?>
                <!-- <a href="Login" class="my-2 my-sm-0" style="color: aliceblue;">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  Masuk
                </a> -->
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1 style="color: black;">
                      Konsultasi Penyakit Tanaman
                    </h1>
                    <p style="color: black;">
                      Kami memiliki solusi dalam masalah penyakit tanaman dengan melakukan konsultasi dalam upaya menanggulagi masalah penyakit tanaman.
                    </p>
                    <div class="btn-box">
                      <a href="/" class="btn1" data-toggle="modal" data-target="#exampleModal"  style="color: black;">
                        Konsultasi
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1 style="color: black;">
                      Penjualan Tanaman Hias
                    </h1>
                    <p style="color: black;">
                      Disini kami menjual berbagai macam jenis tanaman yang kami rawat sendiri dengan melalukan pemeliharaan sesuai standart dan berkualitas.
                    </p>
                    <div class="btn-box">
                      <a href="/shop" class="btn1"  style="color: black;">
                        Belanja
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1 style="color: black;">
                      Investasi Bibit Tanaman
                    </h1>
                    <p style="color: black;">
                      Disini kami juga menyediakan para masyarakat untuk melakukan investasi bibit tanaman dalam upaya melestarikan tanaman di masa yang akan datang.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1" style="color: black;">
                        Investasi
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- department section -->

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Konsultasi Penyakit Tanaman
          </h2>
          <p>
            Bersama menjaga tanaman dari berbagai jenis penyakit tanaman
          </p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="Home/images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Memperoleh data
                </h5>
                <p>
                  Pada dasarnya kami meminta data fakta mengenai apa yang dialami masyarakat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="Home/images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Diagnosa
                </h5>
                <p>
                  Diagnosa jenis penyakit tanaman dengan mengambil data fakta masyarakat.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="Home/images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Jenis Penyakit
                </h5>
                <p>
                  Ditemukan jenis penyakit dari berbagai gejala penyakit tanaman yang ditanyakan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="Home/images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Penanggulangi
                </h5>
                <p>
                  Dapat dicegah dengan berbagi cara tergantung dari penyakit yang diperoleh dari gejala tanaman.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="btn-box">
          <a href="">
            Lihat Semua
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <div class="mt-5">

  </div>

  <!-- end department section -->

  <!-- about section -->

  <section class="about_section layout_margin-bottom" id="tentang">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="Home/images/penyakitTanaman.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang <span>Kami</span>
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Baca Selengkapnya..
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- doctor section -->

  <section class="doctor_section layout_padding" id="pengelola">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Pengelola BB Green House
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Beberapa pengelola dari website penyuluhan penyakit tanaman yang terdiri dari mahasiswa institut teknologi nasoinal dan pengelola BB Grenn House itu sendiri.
        </p>
      </div>
      <div class="row">
      <?php foreach ($pengelola as $p) : ?>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="Home/images/businessman.png" alt="<?= $p['nama']; ?>">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Bpk. Asep
              </h5>
              <h6 class="">
                Pengelola BB Green House
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Irdapis Dewa
              </h5>
              <h6 class="">
                Mahasiswa Itenas
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Anggito Achmad Alfarizi
              </h5>
              <h6 class="">
                Mahasiswa Itenas
              </h6>
            </div>
          </div>
        </div>         -->
      </div>
      <div class="btn-box">
        <a href="">
          Lihat Semua
        </a>
      </div>
    </div>
  </section>

  <!-- end doctor section -->

  <!-- contact section -->
  <section class="contact_section layout_padding" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form action="">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Your Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                </div>
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <!-- <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Beatae provident nobis mollitia magnam voluptatum, unde dicta facilis minima veniam corporis laudantium alias tenetur eveniet illum reprehenderit fugit a delectus officiis blanditiis ea.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="departments.html">
                Departments
              </a>

              <a class="" href="contact.html">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Mahasiswa Itenas<br><br></a>
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/">B7</a>
        </p>

      </div>
    </div>
  </footer>
  <!-- footer section -->
  <script>
          $(function(){

              <?php if(session()->has("pesan")) { ?>
                  Swal.fire({
                      icon: 'success',
                      title: 'Berhasil',
                      text: '<?= session("pesan") ?>'
                  })
              <?php } ?>
          });
      </script>
  <!-- jQery -->
  <script type="text/javascript" src="Home/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="Home/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="Home/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>