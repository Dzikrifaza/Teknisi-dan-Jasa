<!DOCTYPE html>
<html>
<head>
	<title>TEJA APPS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/asli.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">     -->
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/stel.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
</head>
<body>
<?php 
	
	include "koneksi.php";
	// $idTeknisi = $_GET['id_teknisi'];
	     
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="login") {
			echo '<script>alert("Berhasil Login")</script>';
		}
		elseif ($_GET['pesan']=="logout") {
			echo '<script>alert("Berhasil Logout")</script>';
		}
		else{
			echo "<div class='alert aler-danger'>Anda Belum Login!</div>";
		}
	}

	session_start();
	$sql ="select username from users WHERE username='$_SESSION[username]'";
	$hasil=mysqli_query($koneksi,$sql);
	$peg  =mysqli_fetch_array($hasil);
	error_reporting(0);
	 ?>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand mr-5" style="margin-left: 120px; font-family: script mt; color: #D9A4A4;" href="#"><h1>TEJA</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="margin-left: 80px; color: #D9A4A4;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" style="color: #D9A4A4;" href="pesan.php">Menu</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link ml-5" style="color: #D9A4A4;" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" style="color: #D9A4A4;" href="#contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" style="color: #D9A4A4;" href="login.php">Login</a>
      </li>
      <li class="nav-item">
		  <p class="nav-link text-right float-end" style="padding-left: 300px;">
		  <?=$peg['username'];?>     
      </li>
	  <li class="nav-item">
        <a class="nav-link" style="color: #D9A4A4;" style="padding-left: 350px;" href="logout_user.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- akhir navbar -->

	<section class="pertama">
		<div class="con">
			<h1>Teja - Teknisi dan Jasa</h1>
			<p><i>Teknisi dan jasa ini dibuat di develop untuk mewadahi <br>lulusan - lulusan dari kampus / SMK untuk menjadi menangani <br>
			problem problem client sesuai dengan keahlian teknisi</i></p><br>
			<a href="#book"><button class="btn-outline-none" style="background-color: #D9A4A4; border: none; color: white;"><i>Booking Now</i></button></a>

	<img id="about" src="images/landing.svg" width="500" style="float: right;">
		</div>
	</section>
	<section class="kedua">
		<div class="con2">
			<h1>About Us</h1>
		<p  id="contact">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section><br>


	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Our Service</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2 id="book">Our Galeri</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active"  data-filter="*">All</button>
							<button data-filter=".drinks">Electronic</button>
							<button data-filter=".lunch">Developer</button>
							<button data-filter=".dinner">Mekanik</button>
						</div>
					</div>
				</div>
			</div>
				<a href="pesan.php">
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/civil.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Civil Engineer</h4>
							<p>Jasa kontruksi maupun design kontruksi</p>
							<h5>Rp850.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/mekanik.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Mechanical Engineer</h4>
							<p>Jasa mekanik yang handal dalam menangani kebutuhan customer</p>
							<h5>Rp 100.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/dev.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Software Engineer</h4>
							<p>Jasa / IT Consult Perbaikan sebuah aplikasi, pembuatan aplikasi</p>
							<h5> Rp 500.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/electro1.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Electronic Services</h4>
							<p>Jasa perbaikan Tv, Laptop</p>
							<h5> Rp 25.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/editor.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Video Editor</h4>
							<p>Editing konten video</p>
							<h5>Rp 80.000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/desainer.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Designer</h4>
							<p>Jasa desain Logo, Poster, Design Product</p>
							<h5> Rp 100.000,00</h5>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	
		
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


	<section class="kedua" style="float: right;">
		<div class="">
			<h1 style="margin-right: 300px;"><center>Contact Us</center></h1>
			<div class="row">
				<div class="col col-lg-2">
					Nama
				</div>
				<div class="col" style="margin-right: 380px;"><input size="30" type="text" name=""></div>
			</div>
			<br><br>
			<div class="row">
			<div class="col col-lg-2">
				Email
			</div>
			<div class="col" style="margin-right: 380px;"><input size="30" type="text" name=""></div>
		
			</div>
			
			<br><br>
			<div class="row">
			<div class="col col-lg-2">
				Pesan
			</div>
			<div class="col" style="margin-right: 380px;"><br><textarea style="width: 280px; height: 100px;"></textarea></div>
		
		</div>
		</div>
	
	</section>

	<section class="kedua">
		<div class="con2">
			 <div class="container">
        <div class="row" >
            <div class="col-md-3 mb-3 mx-auto">
                <h4>TEJA</h4>
                <p class="">Ciparay</p>
                <p class="">0896-39949-0563</p>
                <p class="">dzikrifaza15@gmail.com</p>
            </div>
            <div class="col-md-3 mb-3 mx-auto">
                <h4>Navigasi</h4>
                <a href="main.php" class="btn btn-sm text-small btn-secondary mb-1">Home</a>
                <a href="#" class="btn btn-sm text-small btn-secondary mb-1">Menu</a>
                <a href="index.php#about" class="btn btn-sm text-small btn-secondary mb-1">About</a>
                <a href="index.php#kontak-kami" class="btn btn-sm text-small btn-secondary mb-1">Kontak</a>
                <a href="index.php#testimoni" class="btn btn-sm text-small btn-secondary mb-1">Testimoni</a>
                <a href="index.php#best-seller" class="btn btn-sm text-small btn-secondary mb-1">Menu Populer</a>
            </div>
            <div class="col-md-3 mb-3 mx-auto">
                <h4>Social Media</h4>
                <p><a href="#" class="text-decoration-none text-white">Instagram</a></p>
                <p><a href="#" class="text-decoration-none text-white">Facebook</a></p>
                <p><a href="#" class="text-decoration-none text-white">Twitter</a></p>
            </div>
            <div class="col-md-3 mb-3 mx-auto">
                <h4>Jam Buka</h4>
                <p class="">Senin-Jum'at 05:00 - 20.00</p>
                <p class="">Sabtu-Minggu 05:00 - 24:00</p>
                <p class="">Hari Nasional Libur</p>
            </div>
        </div>
    </div>
		</div>
	</section>
</body>
<script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</html>