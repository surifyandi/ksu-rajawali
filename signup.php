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
					<h3>DAFTAR</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="active"><a href="#">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end of breadcrumb -->

		<!-- content -->

		<section class="content">
			<div class="container">

				<div class="col-md-12">

					<h2 class="title-signup">Biodata Pengguna (user)</h2>

					<form class="form-signup">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>NIK / NIM</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Hp</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label><br>
							<label class="radio-inline">
								<input type="radio" name="jk" /> Laki - laki
							</label>
							<label class="radio-inline">
								<input type="radio" name="jk" /> Perempuan
							</label>
						</div>

						<div class="form-group">
							<label>Agama</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Status Pernikahan</label><br>
							<label class="radio-inline">
								<input type="radio" name="sp" /> Menikah
							</label>
							<label class="radio-inline">
								<input type="radio" name="sp" /> Belum Menikah
							</label>
						</div>

						<div class="form-group">
							<label>Kewarganegaraan</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Golongan Darah</label><br>
							<label class="radio-inline">
								<input type="radio" name="gd" /> A
							</label>
							<label class="radio-inline">
								<input type="radio" name="gd" /> B
							</label>
							<label class="radio-inline">
								<input type="radio" name="gd" /> AB
							</label>
							<label class="radio-inline">
								<input type="radio" name="gd" /> O
							</label>
						</div>

						<div class="form-group">
							<label>Tanggal Terakhir Donor</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Jurusan</label><br>
							<label class="radio-inline">
								<input type="radio" name="jurusan" /> Elektro
							</label>
							<label class="radio-inline">
								<input type="radio" name="jurusan" /> Sipil
							</label>
						</div>

						<div class="form-group">
							<label>Program Studi</label>
							<select class="form-control">
								<option>Teknik Arsitektur</option>
								<option>Teknik Perencanaan Wilayah dan Tata Kota</option>
								<option>Teknik Elektro</option>
								<option>Teknik Industri</option>
								<option>Teknik Informatika</option>
								<option>Teknik Kimia</option>
								<option>Teknik Lingkungan</option>
								<option>Teknik Mesin</option>
								<option>Teknik Pertambangan</option>
								<option>Teknik Sipil</option>
							</select>
						</div>

						<div class="form-group">
							<label>Angkatan</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Status</label><br>
							<label class="radio-inline">
								<input type="radio" name="jurusan" /> Mahasiswa
							</label>
							<label class="radio-inline">
								<input type="radio" name="jurusan" /> Alumni
							</label>
						</div>

						<div class="form-group">
							<label>Pendidikan Terakhir</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Pekerjaan</label>
							<input type="text" class="form-control" />
						</div>

						<div class="form-group">
							<label>Bidang Keahlian</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Organisasi</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Bidang Keahlian</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Sertifikat</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Pengalaman Kerja</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" />
						</div>

						<div class="form-group">
							<label>ulangi password</label>
							<input type="password" class="form-control" />
						</div>

						<div class="form-group">
							<label class="checkbox-inline">
								<input type="checkbox" name="jurusan" />
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur.</span>
							</label>
						</div>

						<button class="btn btn-primary">Daftar </button>
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