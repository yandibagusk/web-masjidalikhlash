<style type="text/css">
	td{
		text-align: center;
	}
	.active{
		background-color: #006400;
		border: 0;
	}
</style>
<div style="padding: 25px" class="animated fadeIn" id="tampil">
	<div class="row">
		<div class="col-md-6">
			<h6 style="font-size: 25px;">Tambah Kegiatan</h6>
		</div>
	</div>
	<hr>
	<form method="POST" enctype="multipart/form-data">
		<div hidden class="form-group">
			<?php $id_kegiatan = $data->create_idkegiatan(); ?>
			<label for="id_kegiatan"><b>Kode Kegiatan</b></label>
			<input type="text" name="id_kegiatan" value="<?php echo $id_kegiatan; ?>" class="form-control" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="nama"><b>Nama Kegiatan</b></label>
			<textarea class="form-control m_nama" name="nama" rows="2" autocomplete="off"></textarea>
		</div>
		<div class="form-group">
			<label for="tempat"><b>Tempat Kegiatan</b></label>
			<input type="text" name="tempat" value="" class="form-control m_tempat" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="waktu"><b>Waktu Kegiatan</b></label>
			<input type="text" name="waktu" value="" class="form-control m_waktu" autocomplete="off">
		</div>
		<label><b>Deskripsi Kegiatan</b></label>
		<textarea required class="form-control m_deskripsi" id="editor" name="deskripsi"><?php echo $value['deskripsi']?></textarea><br>
		<label for="foto"><b>Foto (.jpeg/.png) [max. 2MB]</b></label>
		<div class="form-group">
			<input type="file" name="foto" class="form-control m_foto" accept="image/png, image/jpeg">
		</div>
		<hr>
		<div style="float: right">
			<button class="btn btn-success" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
			<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;&nbsp;Batal</button>
		</div>
		<?php 
		if (isset($_POST['simpan'])) {
			$data->add_kegiatan($_POST['id_kegiatan'],$_POST['nama'],$_POST['tempat'],$_POST['waktu'],$_POST['deskripsi'],$_FILES['foto']);
		}
		?>
	</form><br><br>
</div>


<script type="text/javascript">
	CKEDITOR.replace("editor");
</script>

<script type="text/javascript">
	$(document).ready( function () {
		$('#myTables').DataTable();
	} );
</script>

<script type="text/javascript">
	$('[data-toggle=confirmation]').confirmation({
		rootSelector: '[data-toggle=confirmation]',});
	</script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover({
				placement : 'top',
				trigger : 'hover'
			});
		});
	</script>