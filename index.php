<?php include 'config/class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Masjid Al-Ikhlash Kembang</title>
	<link rel="icon" href="assets/img/logo3.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/cssuser.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="assets/animate/animate.min.css">
	
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/sweetalert2.all.min.js"></script>
</script>
</head>
<style type="text/css">
	h4,h6, h5{
		color: #7A7A7D;
	}
</style>
<body style="background-color: #EEEEEF;">
	<header style="margin-bottom: -10px;">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white" style="height: 85px; z-index: 1;box-shadow: 0px 1px 5px rgba(0,0,0,0.5);">
			<a class="navbar-brand"><img src="assets/img/logo 1.png" style="width: 190px; margin-left: 90px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav bg-white">
					<a class="nav-item nav-link" href="index.php"><b>Home
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					<a class="nav-item nav-link" href="index.php?page=profile"><b>Profile
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					<a class="nav-item nav-link" href="index.php?page=kegiatan"><b>Kegiatan
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					<a class="nav-item nav-link" href="index.php?page=dakwahcorner"><b>Dakwah Corner
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					<a class="nav-item nav-link" href="index.php?page=berita"><b>Berita
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
					<a class="nav-item nav-link" href="index.php?page=kritikdansaran"><b>Kritik & Saran
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
				</div>
			</div>
		</nav>
	</header><br><br><br><br><br><br>
	<?php
	if (!isset($_GET['page'])) {
		include_once 'user/homepage.php';
	}
	else{
		if ($_GET['page']=="login") {
			include_once 'user/login.php';
		}
		elseif ($_GET['page']=="profile") {
			include_once 'user/profile.php';
		}
		elseif ($_GET['page']=="kegiatan") {
			include_once 'user/kegiatan.php';
		}
		elseif ($_GET['page']=="kritikdansaran") {
			include_once 'user/saran.php';
		}
		elseif ($_GET['page']=="berita") {
			include_once 'user/berita.php';
		}
		elseif ($_GET['page']=="detail") {
			include_once 'user/detail_posting.php';
		}
		elseif ($_GET['page']=="bantuan") {
			include_once 'user/bantuan.php';
		}
		elseif ($_GET['page']=="detailkegiatan") {
			include_once 'user/detail_kegiatan.php';
		} 
		elseif ($_GET['page']=="dakwahcorner") {
			include_once 'user/artikel.php';
		}
		elseif ($_GET['page']=="detailartikel") {
			include_once 'user/detail_artikel.php';
		}
	}
	?>

	<footer>
		<div class="footerbox">
			<div class="row">
				<div class="col-md-5">
					<div class="row" style="margin-left: 40px; margin-top: 28px;">
						<div class="col-md-4">
							<center>
								<img class="img-fluid" src="assets/img/karisma.png" width="90">
								<p>Keluarga Remaja Islam Masjid Al Ikhlash</p>
							</center>
						</div>
						<div class="col-md-4">
							<center>
								<img class="img-fluid" src="assets/img/madin.png" width="90">
								<p style="margin-top: 7px;">Madrasah Diniyah Nurul Iman</p>
							</center>
						</div>
						<div class="col-md-4">
							<center>
								<img class="img-fluid" src="assets/img/phbi.png" width="90">
								<p style="margin-top: 7px;">Panitia Hari Besar Islam Masjid Al Ikhlash</p>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-5" style="padding-left: 80px;">
					<p><b>Contact Us</b></p>
					<p style="margin-top: -10px;">Masjid Al Ikhlash Kembang</p>
					<p style="margin-top: -10px;"><i class="fa fa-map-o"></i>&nbsp;&nbsp;Jl. Cabe 1, Kembang RT05 RW62, Maguwoharjo, Depok, Sleman, Yogyakarta</p>
					<p style="margin-top: -10px;"><i class="fa fa-envelope"></i>&nbsp;&nbsp;alikhlash.kembang@gmail.com</p>
					<!--p style="margin-top: -10px;"><i class="fa fa-phone"></i>&nbsp;&nbsp;+62 821 9333 8711 (Cahyardi Agik)</p-->

					<p style="margin-bottom: -0.02px;"><b>Our Social Media</b></p>
					<a href="https://www.instagram.com/masjidalikhlash/"><img src="assets/img/ig.png" width="30"></a>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>Copyright &COPY; <b>Team ICT Al Ikhlash</b> | Powered by Yandi Bagus Kurniawan</p>
		</div>
	</footer>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
</body>
</html>