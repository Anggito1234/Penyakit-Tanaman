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
  <body class="goto-here">

  <div class="hero_area">
  <div class="hero_bg_box">
      <img src="/Home/images/toko.png" alt="">
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
                <a class="nav-link" href="#" style="color: black;">Konsultasi</a>
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
                <a class="nav-link" href="/shop" style="color: black;">Toko</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="#tentang" style="color: black;"> Tentang</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="departments.html">Fitur</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#pengelola" style="color: red;">Pesan[0]</a>
              </li>
              <li class="nav-item">
                <?php if(session()->get('logged_in') == true) :?>
                <a class="nav-link" href="/shop/cartShow" style="color: blue;"><i class="fa fa-shopping-cart" aria-hidden="true">[<?= $count_produk ?>]</i></a>
                <?php else: ?>
                  <a class="nav-link" href="/shop/cartShow" style="color: red;"><i class="fa fa-shopping-cart" aria-hidden="true">[0]</i></a>
                  <?php endif ?>
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
                <a style="color: black;" href="/Login" class="my-2 my-sm-0" style="color: aliceblue;">
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
                      <a href="" class="btn1"  style="color: black;">
                        Konsultasi
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
      </div>
    <!-- END nav -->

    <div class="hero-wrap hero-bread mb-5" style="background-image: url('images/bg_1.jpg');">
      <div class="container mb-5">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread mt-5">Keranjang Saya</h1>
          </div>
        </div>
      </div>
    </div>

    <?php if((session()->get('logged_in') == false)) : ?>
      <section class="ftco-section ftco-cart mb-5">
			<div class="container mb-5">
        <h5 class="text-center mb-5" style="font-size: 25px;">Anda belum melakukan pembelian produk, silahkan memilih barang <a href="/Shop">terlebih dahulu</a></h5>
      </div>
    </section>
    <?php else: ?>
    <?php if($count_produk == 0) : ?>
    <section class="ftco-section ftco-cart mb-5">
			<div class="container mb-5">
        <h5 class="text-center mb-5" style="font-size: 25px;">Anda belum melakukan pembelian produk, silahkan memilih barang <a href="/Shop">terlebih dahulu</a></h5>
      </div>
    </section>
    <?php else :?>
    <section class="ftco-section ftco-cart mb-5">
			<div class="container">
      <div class="row">
      <?php foreach ($cart as $p) : ?>
        <div class="col-12 col-md-6">
      <div class="card mb-3" style="max-width: 100%;">
      <!-- <img src="/Home/images/toko.png" class="img-fluid rounded-start" alt="..."> -->
        <div class="row g-0">
          <!-- <div class="col-md-12">
            <img src="/Home/images/toko.png" class="img-fluid rounded-start" alt="...">
          </div> -->
          <div class="col-md-12 col-12">
            <div class="card-body">
            <h5 class="text-center mb-3">Status Cart Pembelian</h5>
              <p class="card-title" style="font-weight: bold;">Nama Produk : <?= $p['produk_id']; ?></p>
              <p class="card-text">Jumlah Pembelian : <div class="row">
                <div class="col-12 col-md-12"><input type="number" class="form-control" name="" id="" value="<?= $p['jumlah']; ?>"></div>
              </div></p>
              <div class="row">
                <div class="col-6">
                <p class="card-text">Harga Pembelian : 
                <div class="row">
                <div class="col-12 col-md-12"><p>Hallo</p></div>
              </div>
              </p>
                </div>
                <div class="col-6">
                <p class="card-text">Tanggal Pembelian : 
                <div class="row">
                <div class="col-12 col-md-12"><p><?= $p['created_at']; ?></p></div>
              </div>
              </p>
                </div>
              </div>
              <p class="card-text">Total Pembelian : <div class="row">
                <div class="col-12 col-md-12"><input readonly type="number" class="form-control" name="" id="" value="<?= $p['total_pembelian']; ?>"></div>
              </div></p>
              <div class="row">
              <div class="col-3">
              <p><a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a></p>
              </div>
              <div class="col-3">
              <p><button href="" class="btn btn-secondary" type="submit" disabled><i class="fa fa-pencil" aria-hidden="true"></i> Ubah</button></p>
              </div>
              <div class="col-6">
              <p><a href="" class="btn btn-primary">Lanjutkan Pembayaran <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
        <?php endforeach; ?>
      </div>
     
      <?php endif ?>
      <?php endif ?>


        <!-- <table class="table">
        <thead>
          <tr>
            <th scope="col">No Transaksi</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Tanggal Pembelian</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>lorem</td>
            <td>lorem</td>
            <td><input type="number" class="form-control" value="1"></td>
            <td><span>Rp </span>120.000</td>
            <td><span>Rp</span> 120.000</td>
            <td>Belum Bayar</td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table> -->
		</div>
		</section>
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
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
    
  </body>
</html>