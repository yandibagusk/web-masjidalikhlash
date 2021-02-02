<script type="text/javascript">
	$(document).ready(function(){
		$(".editlink").click(function(){
			var myModal = $('#myModal');
			var id_kegiatan = $(this).closest('tr').find('td.edt_idkegiatan').html();
			var nama = $(this).closest('tr').find('td.edt_nama').html();
			var tempat = $(this).closest('tr').find('td.edt_tempat').html();
			var waktu = $(this).closest('tr').find('td.edt_waktu').html();
			var deskripsi = $(this).closest('tr').find('td.edt_deskripsi').html();
			var foto = $(this).closest('tr').find('td.edt_foto').html();
			$('.m_idkegiatan', myModal).val(id_kegiatan);
			$('.m_nama', myModal).val(nama);
			$('.m_tempat', myModal).val(tempat);
			$('.m_waktu', myModal).val(waktu);
			$('.m_deskripsi', myModal).val(deskripsi);
			$('.m_foto', myModal).val(foto);
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
			<h6 style="font-size: 25px;">Kegiatan</h6>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary btn-sm btn-success" href="index.php?page=addkegiatan" style="float: right;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kegiatan</a>
		</div>
	</div>
	<hr>
	<form method="POST">
		<table id="myTables" class="table table-hover table-bordered table-responsive-sm">
			<thead class="thead-light" style="text-align: center; font-size: 14px;">
				<tr>
					<th scope="col" width="20">No</th>
					<th hidden scope="col">Kode</th>
					<th scope="col">Nama</th>
					<th scope="col">Tempat</th>
					<th scope="col">Waktu</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Foto</th>
					<th scope="col" width="50">Aksi</th>
				</tr>
			</thead>
			<tbody style="font-size: 14px;">
				<?php $kegiatan=$data->select_kegiatan()?>
				<?php foreach ($kegiatan as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td hidden class="edt_idkegiatan"><?php echo $value['id_kegiatan']; ?></td>
						<td class="edt_nama"><?php echo $value['nama']; ?></td>
						<td class="edt_tempat"><?php echo $value['tempat']; ?></td>
						<td class="edt_waktu"><?php echo $value['waktu']; ?></td>
						<td class="edt_deskripsi"><?php echo substr($value['deskripsi'], 0, 150); ?></td>
						<td><?php echo "<img src='../assets/img/$value[foto]' height='90' />";?></td>
						<td>
							<button type="button" class="editlink btn btn-warning btn-sm" style="color: white;" title="Edit Data"></style><i class="fa fa-edit"></i></button>
							<a data-toggle="confirmation" data-title="Delete Data ?" title="Hapus Data" data-popout="true" data-singleton="true" href="index.php?page=delkegiatan&id=<?php echo $value['id_kegiatan'];?>" style="margin: 1px" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</form>
</div>

<!--EDIT KEGIATAN-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Kegiatan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div hidden class="form-group">
						<label for="id_kegiatan"><b>Kode Kegiatan</b></label>
						<input type="text" name="id_kegiatan" value="" class="form-control m_idkegiatan" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="nama"><b>Nama Kegiatan</b></label>
						<textarea class="form-control m_nama" name="nama" rows="2" autocomplete="off"></textarea>
					</div>
					<div class="form-group">
						<label for="tempat"><b>Tempat Kegiatan</b></label>
						<input type="text" name="tempat" class="form-control m_tempat" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="waktu"><b>Waktu Kegiatan</b></label>
						<input type="text" name="waktu" class="form-control m_waktu" autocomplete="off">
					</div>
					<label><b>Deskripsi Kegiatan</b></label>
					<textarea required class="form-control m_deskripsi" id="editor" name="deskripsi"><?php echo $value['deskripsi']?></textarea><br>
					<div class="row">
						<div class="col-md-3">
							<center><?php echo "<img src='../assets/img/$value[foto]' width='80%'/>";?></center>
						</div>
						<div class="col-md-9">
							<label for="foto"><b>Foto (.jpeg/.png) [max. 2MB]</b></label>
							<div class="form-group">
								<input type="file" name="foto" class="form-control m_foto" accept="image/png, image/jpeg">
							</div>
						</div>
					</div>
					<hr>
					<div style="float: right">
						<button class="btn btn-success" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
						<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;&nbsp;Batal</button>
					</div>
					<?php 
					if (isset($_POST['simpan'])) {
						$data->update_kegiatan($_POST['id_kegiatan'],$_POST['nama'],$_POST['tempat'],$_POST['waktu'],$_POST['deskripsi'],$_FILES['foto']);
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