<?php
include '../config/class.php';
if($_SESSION['cek']!="login"){
	header("location:../index.php?page=login");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Masjid Al-Ikhlash Kembang</title>
	<link rel="icon" href="../assets/img/logo3.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/shadow.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/animate/animate.min.css">

	<script src="../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/popper.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/date/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/bootstrap-confirmation.min.js"></script>
	<script src="../assets/js/sweetalert2.all.min.js"></script>
	<script src="../assets/ckeditor/ckeditor.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
</script>
</head>
<style type="text/css">
	h2,h3,h4,h6{
		color: #7A7A7D;
	}
</style>
<body style="background-color: #F7F7F8">
	<div class="wrapper print">
		<!-- Sidebar  -->
		<nav id="sidebar" class="print">
			<div class="sidebar-header">
				<div class="row">
					<div class="col-md-10">
						<img src="../assets/img/logo_admin.png" width="180" style="margin-left: 15px; margin-top: 5px;margin-bottom: 5px;">
					</div>
				</div>
			</div>

			<ul class="list-unstyled components">
				<p></p>
				<li>
					<a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a>
				</li>
				<li>
					<a href="index.php?page=posting"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Postingan</a>
				</li>
				<li>
					<a href="index.php?page=kegiatan"><i class="fa fa-child"></i>&nbsp;&nbsp;Kegiatan</a>
				</li>
				<li>
					<a href="index.php?page=kritikdansaran"><i class="fa fa-comments"></i>&nbsp;&nbsp;Kritik & Saran</a>
				</li>
				<!--li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-archive"></i>&nbsp;&nbsp;Master Data</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a href="index.php?page=datakamera"><i class="fa fa-list"></i>&nbsp;&nbsp;Data Kamera</a>
						</li>
						<li>
							<a href="index.php?page=datakriteria"><i class="fa fa-list"></i>&nbsp;&nbsp;Data Kriteria</a>
						</li>
						<li>
							<a href="index.php?page=dataperhitungan"><i class="fa fa-list"></i>&nbsp;&nbsp;Data Perhitungan</a>
						</li>
					</ul>
				</li-->
				<li>
					<a href="index.php?page=useraccess"><i class="fa fa-users"></i>&nbsp;&nbsp;User Access</a>
				</li>
				<!--li>
					<a href="#"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Settings</a>
				</li-->
				<li>
					<a href="../logout.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
				</li>
			</ul>
			
			<div class="sidebar-footer">
				<div class="row">
					<div class="col-md-10">
						<center><p style="color: white; font-size: 10px;">Copyright &COPY; <b>Team ICT Al Ikhlash</b> Powered by Yandi Bagus Kurniawan</p></center>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<div style="margin: 30px;background-color: white;bor;" class="box">
				<?php
				if(!isset($_GET['page'])) {
					include 'dashboard.php';
				} else {
					if($_GET['page']=="useraccess") {
						include 'user-access.php';
					} else if($_GET['page']=="dashboard") {
						include 'dashboard.php';
					} else if($_GET['page']=="deluser") {
						include 'delUser.php';
					} else if($_GET['page']=="posting") {
						include 'posting.php';
					} else if($_GET['page']=="delposting") {
						include 'delPosting.php';
					} else if($_GET['page']=="kritikdansaran") {
						include 'saran.php';
					} else if($_GET['page']=="delsaran") {
						include 'delSaran.php';
					} else if($_GET['page']=="dataperhitungan") {
						include 'perhitungan.php';
					} else if($_GET['page']=="delperhitungan") {
						include 'delPerhitungan.php';
					} else if($_GET['page']=="addposting") {
						include 'tambahpostingan.php';
					} else if($_GET['page']=="kegiatan") {
						include 'kegiatan.php';
					} else if($_GET['page']=="addkegiatan") {
						include 'tambahkegiatan.php';
					} else if($_GET['page']=="delkegiatan") {
						include 'delKegiatan.php';
					}
				} 
				?>
			</div>
		</div>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="../assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
</body>
</html>