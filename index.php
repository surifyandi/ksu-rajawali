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
		<header>
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
							<li class="login"><a href="#">login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- end of header -->

		<!-- main banner -->
		<section class="banner-top home">
			<div class="container">
				<div class="content">
					<img class="logo" src="images/logo.png" />
					<h1 class="title">
						koperasi<br/> 
						rajawali<br /> 
						nusantara<br />
					</h1>
				</div>
			</div>	
		</section>
		<!-- end of main banner -->

		<!-- top item -->
		<section class="top-item home">
			<div class="row-item">
				<a href="#">
					<div class="content">
						<?php echo file_get_contents("images/icon/target.svg");  ?>
						<span>visi misi</span>
					</div>
				</a>

				<a href="#">
					<div class="content">
						<?php echo file_get_contents("images/icon/courthouse.svg");  ?>
						<span>sejarah</span>
					</div>
				</a>

				<a href="#">
					<div class="content">
						<?php echo file_get_contents("images/icon/employment-deal.svg");  ?>
						<span>hak kewajiban</span>
					</div>
				</a>
			</div>
		</section>
		<!-- end of top item -->

		<!-- about us -->
		<section class="about-us home">
			<div class="container">
				<article>
					<h2 class="big-title">Tentang Koperasi rajawali nusantara</h2>
					<p>
						Lorem ipsum dolor sit amet, decore dolore dolorum vel ea, noster mentitum cu sit. Duo cu eirmod detracto sensibus, in omnium nominavi tincidunt eum. Ei ius graeco viderer, vis quas paulo ne, ex vix aliquid definitiones. Veri inani facilisis an pri. At erant decore necessitatibus per, cu erat illud eum. Ut laoreet debitis eam, causae sanctus fabulas in vix. Iisque viderer insolens eu sed. Vide modus invidunt cu usu, quo an labitur legendos tacimates.
					</p>
					<p>
						Nec id facilisi consectetuer, sit quidam erroribus ne. Qui partiendo forensibus ne, laudem maluisset te pri. In sed decore salutatus, posse intellegat ei vis. Mea duis intellegat te, labitur convenire periculis nec ex. Eum ei offendit pericula disputando, pro quem feugiat ne. Ea quo stet imperdiet theophrastus. Eruditi intellegam omittantur cum ei, et ius suscipit appetere recteque, stet civibus dissentiunt nam ea. In eam augue choro aliquip, at nullam veritus eleifend per. Et viris principes quo. Partem pertinacia repudiandae cu eum, nec facer ponderum legendos ad.
					</p>
				</article>
			</div>
		</section>
		<!-- end of about us -->

		<!-- new product -->
		<section class="new-product">
			<div class="intro">
				<h2 class="big-title">produk terbaru</h2>
				<p>Nec id facilisi consectetuer, sit quidam erroribus ne. Qui partiendo forensibus ne, laudem maluisset te pri. In sed decore salutatus, posse intellegat ei vis. Mea duis intellegat te, labitur convenire periculis nec. </p>
			</div>
			<div class="row-content">
				<a href="#">
					<figure>
						<img src="images/thumb/product/produk-1.jpg">
						<figcaption>
							<h4>Kerajinan Tenun Tikar</h4>
							<span>selengkapnya <i class="fa fa-long-arrow-right"></i></span>
						</figcaption>
					</figure>
				</a>

				<a href="#">
					<figure>
						<img src="images/thumb/product/produk-2.jpg">
						<figcaption>
							<h4>Gula Aren Jahe</h4>
							<span>selengkapnya <i class="fa fa-long-arrow-right"></i></span>
						</figcaption>
					</figure>
				</a>

				<a href="#">
					<figure>
						<img src="images/thumb/product/produk-3.jpg">
						<figcaption>
							<h4>Souvenir</h4>
							<span>selengkapnya <i class="fa fa-long-arrow-right"></i></span>
						</figcaption>
					</figure>
				</a>

				<a href="#">
					<figure>
						<img src="images/thumb/product/produk-4.jpg">
						<figcaption>
							<h4>Iguana Kopi</h4>
							<span>selengkapnya <i class="fa fa-long-arrow-right"></i></span>
						</figcaption>
					</figure>
				</a>
			</div>
		</section>
		<!-- end of new product -->

		<!-- latest event -->
		<section class="latest-event">
			<div class="container">
				<div class="col-md-12">
					<h2 class="big-title">event terbaru</h2>
				</div>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<div class="date">
						<div class="day">15</div>
						<div class="month">nov</div>
					</div>
					<a href="#" class="title">Pemerintah Bakal Bekukan 61 Ribu Koperasi di Seluruh Indonesia</a>
					<p>
						Sebanyak 61 ribu koperasi di seluruh Indonesia terancam dibekukan. Dari jumlah tersebut, sekitar 9.968 koperasi berada di wilayah Jawa Barat...
					</p>
					<a href="#" class="readmore">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
				</article>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<div class="date">
						<div class="day">15</div>
						<div class="month">nov</div>
					</div>
					<a href="#" class="title">Pemerintah Bakal Bekukan 61 Ribu Koperasi di Seluruh Indonesia</a>
					<p>
						Sebanyak 61 ribu koperasi di seluruh Indonesia terancam dibekukan. Dari jumlah tersebut, sekitar 9.968 koperasi berada di wilayah Jawa Barat...
					</p>
					<a href="#" class="readmore">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
				</article>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<div class="date">
						<div class="day">15</div>
						<div class="month">nov</div>
					</div>
					<a href="#" class="title">Pemerintah Bakal Bekukan 61 Ribu Koperasi di Seluruh Indonesia</a>
					<p>
						Sebanyak 61 ribu koperasi di seluruh Indonesia terancam dibekukan. Dari jumlah tersebut, sekitar 9.968 koperasi berada di wilayah Jawa Barat...
					</p>
					<a href="#" class="readmore">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
				</article>

			</div>
		</section>
		<!-- end of latest event -->

		<!-- latest news -->
		<section class="latest-news">
			<div class="container">
				<div class="col-md-12">
					<h2 class="big-title">berita terbaru</h2>
				</div>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<figure>
						<img src="images/thumb/news/berita-1.jpg">
						<figcaption>
							<a href="#" class="title"><h4>Pemerintah Bakal Bekukan 61 Ribu Koperasi di Seluruh Indonesia</h4></a>
							<span class="date">minggu, 15 November 2016</span>
							<p>
								Sebanyak 61 ribu koperasi di seluruh Indonesia terancam dibekukan. Dari jumlah tersebut, sekitar 9.968 koperasi berada di wilayah Jawa Barat...
							</p>
							<a href="#" class="more">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
						</figcaption>
					</figure>
				</article>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<figure>
						<img src="images/thumb/news/berita-2.jpg">
						<figcaption>
							<a href="#" class="title"><h4>Jokowi: Hadapi Persaingan, Koperasi Harus Mau Bergabung</h4></a>
							<span class="date">minggu, 15 November 2016</span>
							<p>
								Presiden Joko Widodo (Jokowi) meminta kepada para pelaku usaha nasional untuk siap menghadapi persaingan global. Menurut Jokowi, persaingan...
							</p>
							<a href="#" class="more">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
						</figcaption>
					</figure>
				</article>

				<article class="col-md-4 col-sm-12 col-xs-12">
					<figure>
						<img src="images/thumb/news/berita-3.jpg">
						<figcaption>
							<a href="#" class="title"><h4>Menkop UKM Puspayoga: Bentuk Koperasi Bukan Hanya Cari Dana</h4></a>
							<span class="date">minggu, 15 November 2016</span>
							<p>
								Puncak peringatan Hari Koperasi Nasional ke-69 diselenggarakan pada Kamis pekan ini di Jambi. Selain Menteri Koperasi dan Usaha Kecil Menengah...
							</p>
							<a href="#" class="more">selengkapnya &nbsp <i class="fa fa-long-arrow-right"></i></a>
						</figcaption>
					</figure>
				</article>

			</div>
		</section>
		<!-- end of latest news -->

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