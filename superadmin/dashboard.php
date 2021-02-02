<style type="text/css">
	.card {
		transition: all 0.3s;
		color: white;
		border-radius: 0px;

		border:none;
	}
	.card:hover {
		transition: all 0.7s;
		transform: scale(1.09);
	}
	.icon{
		opacity: 0.7;
		color: white;
	}
	.icon:hover{
		opacity: 1;
		color: white;
	}
	.text{
		opacity: 0.7;
		color: white;
	}
	.text:hover{
		opacity: 1;
		color: white;
	}
	.count{
		opacity: 0.7;
		font-weight: bold;
	}
	.count:hover{
		opacity: 1;
		font-weight: bold;
	}
	a{
		color: white;
	}
	a:hover{
		color: white;
		text-decoration: none;
	}

</style>


<div style="padding: 25px;" class="animated fadeIn">
	<div class="row">
		<div class="col-md-9">
			<h4>Dashboard</h4>
		</div>
		<div class="col-md-3">
			<h5 style="color: #7A7A7D; text-align: right;">
				<?php
				date_default_timezone_set('Asia/Jakarta');
				$jam=date("H:i:s");
				$a = date ("H");
				if (($a>=6) && ($a<=10)){
					echo "Selamat Pagi";
				} else if(($a>=10) && ($a<=15)) {
					echo "Selamat Siang";
				} else if (($a>15) && ($a<=18)){
					echo "Selamat Sore";
				} else { 
					echo "Selamat Malam";
				}
				?>
			</h5>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="card bg-danger">
				<div class="card-body">
					<center><a class="icon" href="index.php?page=posting"><i class="fa fa-newspaper-o fa-5x"></i></a></center>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-8"><div style="padding: 0px; font-size: 15px;"><b>Jumlah Postingan</b></div></div>
						<div class="col-md-4">
							<?php
							$postingan = $data->jum_posting();
							foreach ($postingan as $key => $value):
								?>
								<?php echo $value['jumlah']; ?>
								<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-warning">
				<div class="card-body">
					<center><a class="icon" href="index.php?page=kritikdansaran"><i class="fa fa-comments fa-5x"></i></a></center>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-9"><div style="padding: 0px; font-size: 15px;"><b>Jumlah Kritik & Saran </b></div></div>
						<div class="col-md-3">
							<?php
							$kritik = $data->jum_kritik();
							foreach ($kritik as $key => $value):
								?>
								<?php echo $value['jumlah']; ?>
								<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-success">
				<div class="card-body">
					<center><a class="icon" href="index.php?page=useraccess"><i class="fa fa-users fa-5x"></i></a></center>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-9"><div style="padding: 0px; font-size: 15px;"><b>Jumlah User</b></div></div>
						<div class="col-md-3">
							<?php
							$user = $data->jum_user();
							foreach ($user as $key => $value):
								?>
								<?php echo $value['jumlah']; ?>
								<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-success">
				<div class="card-body">
					<center><a class="icon" href="index.php?page=kegiatan"><i class="fa fa-child fa-5x"></i></a></center>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-9"><div style="padding: 0px; font-size: 15px;"><b>Jumlah Kegiatan</b></div></div>
						<div class="col-md-3">
							<?php
							$kegiatan = $data->jum_kegiatan();
							foreach ($kegiatan as $key => $value):
								?>
								<?php echo $value['jumlah']; ?>
								<?php
							endforeach;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>