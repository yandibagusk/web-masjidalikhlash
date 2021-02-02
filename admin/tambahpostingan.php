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
			<h6 style="font-size: 25px;">Tambah Postingan</h6>
		</div>
	</div>
	<hr>
	<form method="POST" enctype="multipart/form-data">
		<div hidden class="form-group">
			<?php $id_posting = $data->create_idposting(); ?>
			<label for="id_berita"><b>Kode Postingan</b></label>
			<input type="text" name="id_posting" value="<?php echo $id_posting; ?>" class="form-control" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="highlights"><b>Judul Postingan</b></label>
			<textarea class="form-control" name="judul" rows="2" autocomplete="off"></textarea>
		</div>
		<label><b>Isi Berita</b></label>
		<textarea required class="form-control" id="editor" name="isi"></textarea><br>
		<div class="form-group">
			<label for="kategori"><b>Kategori</b></label>
			<select class="form-control" name="kategori">
				<option value="" disabled selected> - Pilih Kategori - </option>
				<option value="Berita">Berita</option>
				<option value="Materi">Materi</option>
			</select>
		</div>
		<label for="foto"><b>Foto (.jpeg/.png) [max. 2MB]</b></label>
		<div class="form-group">
			<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
		</div>
		<hr>
		<div style="float: right">
			<button class="btn btn-success active" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Publikasikan</button>
		</div>
		<?php 
		if (isset($_POST['simpan'])) {
			$data->add_posting($_POST['id_posting'],$_POST['judul'],$_POST['isi'],$_FILES['foto'],$_POST['kategori']);
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