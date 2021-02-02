<script type="text/javascript">
	$(document).ready(function(){
		$(".editlink").click(function(){
			var myModal = $('#myModal');
			var id_posting = $(this).closest('tr').find('td.edt_idposting').html();
			var judul = $(this).closest('tr').find('td.edt_judul').html();
			var isi = $(this).closest('tr').find('td.edt_isi').html();
			var foto = $(this).closest('tr').find('td.edt_foto').html();
			var kategori = $(this).closest('tr').find('td.edt_kategori').html();
			$('.m_idposting', myModal).val(id_posting);
			$('.m_judul', myModal).val(judul);
			$('.m_isi', myModal).val(isi);
			$('.m_foto', myModal).val(foto);
			$('.m_kategori', myModal).val(kategori);
			myModal.modal({ show: true });
			return false;
		});
	});
</script>
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
			<h6 style="font-size: 25px;">Postingan</h6>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary btn-sm btn-success" href="index.php?page=addposting" style="float: right;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Postingan</a>
		</div>
	</div>
	<hr>
	<form method="POST">
		<table id="myTables" class="table table-hover table-bordered table-responsive-sm">
			<thead class="thead-light" style="text-align: center; font-size: 14px;">
				<tr>
					<th scope="col" width="20">No</th>
					<th hidden scope="col" width="50">Kode</th>
					<th scope="col" width="200">Judul</th>
					<th scope="col">Isi Berita</th>
					<th scope="col" width="100">Kategori</th>
					<th scope="col" width="100">Foto</th>
					<th scope="col" width="50">Aksi</th>
				</tr>
			</thead>
			<tbody style="font-size: 14px;">
				<?php $posting=$data->select_posting()?>
				<?php foreach ($posting as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td hidden class="edt_idposting"><?php echo $value['id_posting']; ?></td>
						<td class="edt_judul"><?php echo $value['judul']; ?></td>
						<td class="edt_isi"><?php echo substr($value['isi'], 0, 150); ?></td>
						<td class="edt_kategori"><?php echo $value['kategori']; ?></td>
						<td><?php echo "<img src='../assets/img/$value[foto]' height='90' />";?></td>
						<td>
							<button type="button" class="editlink btn btn-warning btn-sm" style="color: white;" title="Edit Data"></style><i class="fa fa-edit"></i></button>
							<a data-toggle="confirmation" data-title="Delete Data ?" title="Hapus Data" data-popout="true" data-singleton="true" href="index.php?page=delposting&id=<?php echo $value['id_posting'];?>" style="margin: 1px" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</form>
</div>

<!--EDIT POSTING-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Postingan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div hidden class="form-group">
						<label for="id_posting"><b>Kode Posting</b></label>
						<input type="text" name="id_posting" value="" class="form-control m_idposting" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="judul"><b>Judul Berita</b></label>
						<textarea class="form-control m_judul" name="judul" rows="2" autocomplete="off"></textarea>
					</div>
					<label><b>Isi Berita</b></label>
					<textarea required class="form-control m_isi" id="edtr" name="isi"><?php echo $value['isi']?></textarea><br>
					<div class="form-group">
						<label for="kategori"><b>Kategori</b></label>
						<select class="form-control m_kategori" name="kategori">
							<option value="" disabled selected> - Pilih Kategori - </option>
							<option value="Berita">Berita</option>
							<option value="Materi">Materi</option>
						</select>
					</div>
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
						$data->update_posting($_POST['id_posting'],$_POST['judul'],$_POST['isi'],$_FILES['foto'],$_POST['kategori']);
					}
					?>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	CKEDITOR.replace("editor");
</script>

<script type="text/javascript">
	CKEDITOR.replace("edtr");
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