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
  <link rel="shortcut icon" href="/Home/images/Swimming Instructor-crop.ico" type="">

  <title> Toko BB Green House </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/Home/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="/Home/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/Home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/Home/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area" style="min-height: 10vh;">

    <div class="hero_bg_box" style="background-color: #178066;">
      <!-- <img src="" alt=""> -->
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span style="color: white;">
              BB Green House
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/" style="color: white;">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <?php if(session()->get('logged_in') == true) : ?>
                <a class="nav-link" href="#" style="color: white;">Konsultasi</a>
                <?php else: ?>
                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal" style="color: white;">Konsultasi</a>  
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
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                  </div>
                </div>
              </div>
                <?php endif ?> 
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="/shop" style="color: white;">Toko</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="#tentang" style="color: white;"> Tentang</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="departments.html">Fitur</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#pengelola" style="color: black;">Pesan[0]</a>
              </li>
              <li class="nav-item">
                <?php if(session()->get('logged_in') == true) :?>
                <a class="nav-link" href="/shop/cartShow" style="color: blue;"><i class="fa fa-shopping-cart" aria-hidden="true">[<?= $count_produk ?>]</i></a>
                <?php else: ?>
                  <a class="nav-link" href="/shop/cartShow" style="color: black;"><i class="fa fa-shopping-cart" aria-hidden="true">[0]</i></a>
                  <?php endif ?>
              </li>              
              <form class="form-inline">
                <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button> -->
                <?php if(session()->get('logged_in') == true) : ?>
                  <div class="dropdown show">
                  <a style="color: white;" href="#" class="my-2 my-sm-0 dropdown-toggle" style="color: aliceblue;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"> <?=session()->get('username');?></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <!-- <a class="dropdown-item" href="#">Chart</a> -->
                    <a class="dropdown-item" href="/Login/logout">Logout</a>
                  </div>
                  </div>
                <?php else: ?>
                <a style="color: white;" href="/Login" class="my-2 my-sm-0" style="color: aliceblue;">
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
                <div class="col-md-12">
                    <p  style="color: white;">
                     Kami memiliki solusi dalam masalah penyakit tanaman dengan melakukan konsultasi dalam upaya menanggulagi masalah penyakit tanaman.
                    </p>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- department section -->

      <!-- <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Toko Tanaman
          </h2>
          <p>
            Kami memiliki Menjual Tanaman di Toko BB Green House.
          </p>
        </div>
      </div> -->
  <div class="mt-5">
    
  </div>

  <!-- end department section -->

  <!-- about section -->

  <section class="about_section layout_margin-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <form action="/Shop/beli" method="post" enctype="multipart/form-data" class="row g-3">
         <?= csrf_field(); ?>
         <input type="text" name="user" id="user" hidden value="<?=session()->get('user_id');?>">
         <input type="text" name="produk" id="produk" hidden value="<?= $produk['produk_id'];?>">
         <input type="text" name="jumlah" id="jumlah" hidden value="0">
         <input type="text" name="harga" id="harga" hidden value="">
        <div class="card" style="width: 50%;">
        <img src="/Home/images/<?= $produk['gambar'];?>" class="card-img-top" alt="" width="100%">
          <div class="card-body">
          <p style="text-transform: uppercase; font-weight:bold;" ><?= $produk['nama']; ?></p>
            <p style="text-transform: uppercase; font-weight:bold;" ></p>
            <p>Deskripsi : <?= $produk['deskripsi'];?><span></span></p>
        
            <p class="card-text" style="font-weight: bold;">Harga : <span>Rp</span><?= $produk['harga'];?>  <span>,-</span></p>
            <div class="row">
            <div class="col-md-3 col-3">
            <?php if(session()->get('logged_in') == true) : ?>
            <button title="Masukan Keranjang" type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
            <?php else :?>
              <a title="Masukan Keranjang" data-toggle="modal" data-target="#exampleModal1" class="btn btn-danger"><i style="color: white;" class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        Maaf, Pembelian Barang Harus Login Terlebih Dahulu ! <a href="/Login"> Login Masuk</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif ?>
            </div>
            </div>
          </div>
        </div>
        </form>
        </div>
        
    </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- doctor section -->


  <!-- end doctor section -->

  <!-- contact section -->
  <!-- end contact section -->

  <!-- client section -->

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
              <a class="" href="doctors.html">
                Doctors
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
          <a href="https://html.design/">Free Html Templates<br><br></a>
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/">ThemeWagon</a>
        </p>
       
      </div>  
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="/Home/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="/Home/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="/Home/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>