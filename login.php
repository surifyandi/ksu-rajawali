<!DOCTYPE HTML>
<html lang="en-US">
<html>
	<head>
	<meta charset="UTF-8">
		<title>KSU Rajawali Nusantara</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800" rel="stylesheet">
	</head>
	<body>

		<!-- header -->
		<header class="white">
			<nav class="navigation">
				<div class="btn-navmobile">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="container">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<img src="images/logo.png" class="logo"/>
					</div>
					<div class="col-md-10 col-sm-12 col-xs-12">
						<ul>
							<li><a href="index.php">home</a></li>
							<li class="dropdown-nav">
								<a href="#" class="dead-link">profil <i class="fa fa-sort-down"></i></a>
								<ul>
									<li><a href="profil.php">visi misi</a></li>
									<li><a href="profil.php">sejarah pembentukan</a></li>
									<li><a href="profil.php">hak dan kewajiban</a></li>
									<li><a href="profil.php">ad / art</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#" class="dead-link">data anggota <i class="fa fa-sort-down"></i></a>
								<ul>
									<li><a href="#">data anggota mahasiswa</a></li>
									<li><a href="#">data anggota alumni</a></li>
								</ul>
							</li>
							<li><a href="list-produk.php">produk</a></li>
							<li><a href="list-berita.php">berita</a></li>
							<li><a href="#">event</a></li>
							<li><a href="#">chat room</a></li>
							<li><a href="#">bantuan</a></li>
							<li class="login"><a href="login.php">login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- end of header -->

		<!-- breadcrumb -->
		<section class="breadcrumb">
			<div class="container">
				<div class="col-md-12">
					<h3>LOGIN</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="active"><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end of breadcrumb -->

		<!-- content -->

		<section class="content">
			<div class="container">
				<div class="banner-login">
					<img src="images/logo-black.png" />
					<h2>Koperasi Rajawali<br />Nusantara</h2>
				</div>
				<div class="login-area">
					<form>
						<div class="form-group">
							<label>Email</label>
							<input type="text" placeholder="masukkan email anda" class="form-control" />
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="passwor" placeholder="masukkan password anda" class="form-control" />
						</div>

						<div class="form-group">
							<button class="btn btn-primary">Masuk &nbsp <i class="fa fa-sign-in"></i></button>
						</div>

						<ul>
							<li><a href="#">belum punya akun ?</a></li>
							<li><a href="#">lupa password</a></li>
						</ul>
					</form>
				</div>

			</div>
		</section>

		<!-- end of content -->

		<!-- footer start -->
		<footer>
			<div class="container">
				<div class="col-md-4 address">
					<div class="logo">
						<img src="images/logo.png">	
						<h4>KOPERASI <br> RAJAWALI NUSANTARA</h4>
					</div>
					<ul>
						<p>Jalan Lorem Ipsum Dolor Sit Amet, No.55</p>
						<p>Pontianak, Kalimantan Barat</p>
						<p>78115</p>
					</ul>
				</div>
				<div class="col-md-4 contact">
					<h4 class="title-footer">HUBUNGI KAMI</h4>
					<ul>
						<li class="phone"><i class="fa fa-phone"></i> <span>+62 813-345-345, +62 888-123-123</span></li>
						<li class="mail"><i class="fa fa-envelope"></i> <span>halo@ksurajanusa.com <br> support@rajanusa.com</span></li>
						<li class="fb"><i class="fa fa-facebook"></i> <span>Koperasi Rajawali Nusantara</span></li>
						<li class="tw"><i class="fa fa-twitter"></i> <span>@ksurajanusa</span></li>
					</ul> 
				</div>
				<div class="col-md-4 related-link">
					<h4 class="title-footer">LINK TERKAIT</h4>
					<ul>
						<li><i class="fa fa-angle-right"></i><a href="#">Universitas Tanjungpura</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Fakultas Teknik Untan</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">IAFT</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">LPSE</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Disperindag</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Dinas Koperasi dan UKM</a></li>
					</ul> 
				</div>
			</div>
		</footer>
		<!-- footer end -->

		<!-- copyright start -->
		<div class="copyright">
			<div class="container">
				<div class="col-md-12">
					<span>copyright @ksurajawalinusantara</span>
				</div>
			</div>
		</div>
		<!-- copyright end -->
	</body>
	<script src="vendor/jquery/jquery-3.1.0.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>