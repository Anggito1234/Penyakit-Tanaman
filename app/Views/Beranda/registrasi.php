<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/Home/css/css/style.css">
	<link rel="shortcut icon" href="/Home/images/favicon.png" type="">

	<title> BB Green House </title>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #05</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<!-- <div class="img" style="background-image: url(images/bg-1.jpg);"></div> -->
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Registrasi</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					<form action="/Login/registrasiUser" method="post" class="signin-form">
					<?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger">
                        <?=session()->getFlashdata('msg')?>
                        </div>
					<?php endif;?>
					<input type="text" class="form-control" name="role" hidden value="user">
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="username" required>
						<label class="form-control-placeholder" for="username">Username</label>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="email" required>
						<label class="form-control-placeholder" for="Email">Email</label>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nama" required>
						<label class="form-control-placeholder" for="Nama">Nama</label>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="alamat" required>
						<label class="form-control-placeholder" for="Alamat">Alamat</label>
					</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Registrasi</button>
		            </div>
		          </form>
		          <p class="text-center">Sudah Mempunyai Akun? <a href="/login">Login</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/Home/js/js/jquery.min.js"></script>
  <script src="/Home/js/js/popper.js"></script>
  <script src="/Home/js/js/bootstrap.min.js"></script>
  <script src="/Home/js/js/main.js"></script>

	</body>
</html>

