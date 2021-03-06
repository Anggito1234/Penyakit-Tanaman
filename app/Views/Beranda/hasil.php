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

  <title> BB Green House </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/Home/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="/Home/css/font-awesome.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="/Home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/Home/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="/Home/images/penyakitTanaman.jpg" alt="">
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
                <a class="nav-link" href="/" style="color: black;">Beranda <span class="sr-only">(current)</span></a>
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
                <?php if(session()->get('logged_in') == true) : ?>
                  <div class="dropdown show">
                  <a style="color: black;" href="#" class="my-2 my-sm-0 dropdown-toggle" style="color: aliceblue;" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"> <?=session()->get('username');?></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <!-- <a class="dropdown-item" href="#">Chart</a> -->
                    <a class="dropdown-item" href="/Login/logout">Logout</a>
                  </div>
                  </div>
                <?php else: ?>
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
                    <h1  style="color: black;">
                      Konsultasi Penyakit Tanaman
                    </h1>
                    <p  style="color: black;">
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
                    <h1  style="color: black;">
                      Penjualan Tanaman Hias
                    </h1>
                    <p  style="color: black;">
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
                    <h1  style="color: black;">
                      Investasi Bibit Tanaman
                    </h1>
                    <p  style="color: black;">
                      Disini kami juga menyediakan para masyarakat untuk melakukan investasi bibit tanaman dalam upaya melestarikan tanaman di masa yang akan datang.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1"  style="color: black;">
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


<div class="container mt-2">
    <h2 class="text-center">Hasil Diagnosa Penyakit Tanaman</h2>
</div>

  <!-- department section -->
  <div class="mt-5 mb-5">
  <div class="container">
      <?php foreach ($penyakit as $p):?>
        <form method="post" id="form-simpan">
        <div class="card">
        <h5 class="card-header bg-info" style="color: white;">Hasil Diagnosa Penyakit</h5>
        <div class="card-body">
          <h5 class="card-title">Data Pengajuan Konsultasi</h5>
          <p class="card-text">Username : <?= session()->get('username')?></p>
          <input type="text" name="user_id" id="" hidden value="<?= session()->get('user_id')?>">
          <p class="card-text">Penyakit Tanaman Disebabkan Oleh: <?= $p['NamaPenyakit']?></p>
          <p class="card-text">Cara Menangani Penyakit : <br>  <?= $p['Solusi']?></p>
          <p class="card-text">Gejala Penyakit : <br>  <?= $p['Gejala']?></p>
          </div>
        </div>
          <div class="d-flex align-items-start mt-2">
          <a href="/Home/printHasil/<?= $p['KodePenyakit']?>" class="btn btn-info">Simpan dan Print</a>
          <a href="/konsultasi" class="btn btn-success ml-2">Konsultasi Ulang</a>
          </div>
          </form>
          <?php endforeach?>
      </div>
</div>
</div>


  <!-- end department section -->

  <!-- about section -->

 
  <!-- end about section -->

  <!-- doctor section -->

 
  <!-- end doctor section -->

  <!-- contact section -->
  <!-- end contact section -->

  <!-- client section -->


  <!-- end client section -->

  <!-- footer section -->
 
  <!-- footer section -->

  <script type="text/javascript">
        $("#simpan").click(function(){
            var data = $('#form-simpan').serialize();
            $.ajax({
                type	: 'POST',
                url	: "/Home/generate", data: data,
                cache	: false,
                success	: function(data){
                   alert("Berhasil");
                }
            });
        });
  </script> 

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