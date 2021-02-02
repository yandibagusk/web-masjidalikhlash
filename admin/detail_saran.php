	<div class="container animated fadeIn">
		<div class="row">
			<div class="col-md-9">
				<div class="container" style="background-color: white; margin-bottom: 30px; padding-top: 30px; padding-right: 35px; padding-left: 35px; padding-bottom: 30px;">
					<?php $detail=$data->select_detail_berita($_GET['id']); ?>
					<?php foreach ($detail as $key => $value): ?>
						<h4 style="color: #6E6E6E;"><b><?php echo $value['judul']?></b></h4>
						<p style="font-size: 13px; margin-bottom: -6px; color: #A4A4A4;">
							<i class="fa fa-clock-o"></i> Published on <?php echo date("d M Y (h:i)", strtotime($value['submitted_on'])); ?> by Admin</p>
							<hr>
							<center><?php echo "<img src='assets/img/$value[foto]' width='90%'/>";?><br><br></center>
							<p style="font-size: 18px; text-align: justify;"><?php echo $value['isi_berita']?></p>
						<?php endforeach?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="container" style="background: white; margin-bottom: 30px; padding-top: 30px; padding-right: 30px; padding-left: 30px; padding-bottom: 30px;">
						<h5><strong>Recent Updates</strong></h5>
						<hr>
						<?php $berita=$data->select_berita_terkini()?>
						<?php foreach ($berita as $key => $value): ?>
							<b><a href="index.php?page=detailberita&id=<?php echo $value['id_berita'];?>" style="font-size: 15px; margin-bottom: -1px;"><?php echo $value['judul']; ?></a></b>
							<p style="font-size: 10px; margin-bottom: -6px; color: #A4A4A4;">
								<i class="fa fa-clock-o"></i> Published on <?php echo date("d M Y (h:i)", strtotime($value['submitted_on'])); ?></p><hr>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
