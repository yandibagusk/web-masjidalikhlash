<script type="text/javascript">
	$(document).ready(function(){
		$(".editlink").click(function(){
			var myModal = $('#myModal');
			var id_saran = $(this).closest('tr').find('td.edt_idsaran').html();
			var nama = $(this).closest('tr').find('td.edt_nama').html();
			var email = $(this).closest('tr').find('td.edt_email').html();
			var saran = $(this).closest('tr').find('td.edt_saran').html();
			$('.m_idsaran', myModal).val(id_saran);
			$('.m_nama', myModal).val(nama);
			$('.m_email', myModal).val(email);
			$('.m_saran', myModal).val(saran);
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
		color: white;
	}
</style>

<div style="padding: 25px" class="animated fadeIn" id="tampil">
	<div class="row">
		<div class="col-md-6">
			<h6 style="font-size: 25px;">Kritik dan Saran</h6>
		</div>
		<div class="col-md-6">
			<button class="btn active btn-sm btn-success" style="float: right" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kritik & Saran</button>
		</div>
	</div>
	<hr>
	<form method="POST">
		<table id="myTables" class="table table-hover table-bordered table-responsive-sm">
			<thead class="thead-light" style="text-align: center; font-size: 14px;">
				<tr>
					<th scope="col" width="20">No</th>
					<th hidden scope="col" width="40">Kode</th>
					<th scope="col" width="150">Nama</th>
					<th scope="col" width="100">Email</th>
					<th scope="col" >Kritik & Saran</th>
					<th scope="col" width="50">Aksi</th>
				</tr>
			</thead>
			<tbody style="font-size: 14px;">
				<?php $user=$data->select_saran()?>
				<?php foreach ($user as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td hidden class="edt_idsaran"><?php echo $value['id_saran']; ?></td>
						<td class="edt_nama"><?php echo $value['nama']; ?></td>
						<td class="edt_email"><?php echo $value['email']; ?></td>
						<td class="edt_saran"><?php echo $value['saran']; ?></td>
						<td>
							<button type="button" class="editlink btn btn-warning btn-sm" style="color: white;" title="Edit Data"></style><i class="fa fa-edit"></i></button>
							<a data-toggle="confirmation" data-title="Delete Data ?" title="Hapus Data" data-popout="true" data-singleton="true" href="index.php?page=delsaran&id=<?php echo $value['id_saran'];?>" style="margin: 1px" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</form>
</div>


<!--TAMBAH USER-->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tambah Kritik dan Saran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div hidden class="form-group">
						<?php $id_saran = $data->create_idsaran(); ?>
						<label for="id_saran"><b>Kode Saran</b></label>
						<input type="text" name="id_saran" value="<?php echo $id_saran; ?>" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="nama"><b>Nama</b></label>
						<input type="text" name="nama" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="email"><b>Email</b></label>
						<input type="text" name="email" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="saran"><b>Kritik & Saran</b></label>
						<textarea class="form-control" name="saran" rows="5" autocomplete="off"></textarea>
					</div>
					<hr>
					<div style="float: right">
						<button class="btn btn-success" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
						<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;&nbsp;Batal</button>
					</div>
					<?php 
					if (isset($_POST['simpan'])) {
						$data->add_saran($_POST['id_saran'],$_POST['nama'],$_POST['email'],$_POST['saran']);
					}
					?>
				</form>
			</div>
		</div>
	</div>
</div>

<!--EDIT SARAN-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Kritik dan Saran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div hidden class="form-group">
						<label for="id_saran"><b>Kode Saran</b></label>
						<input type="text" name="id_saran" class="form-control m_idsaran" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="nama"><b>Nama</b></label>
						<input type="text" name="nama" class="form-control m_nama" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="email"><b>Email</b></label>
						<input type="text" name="email" class="form-control m_email" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="saran"><b>Kritik & Saran</b></label>
						<textarea class="form-control m_saran" name="saran" rows="5" autocomplete="off"></textarea>
					</div>
					<hr>
					<div style="float: right">
						<button class="btn btn-success" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
						<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;&nbsp;Batal</button>
					</div>
					<?php 
					if (isset($_POST['simpan'])) {
						$data->update_saran($_POST['id_saran'],$_POST['nama'],$_POST['email'],$_POST['saran']);
					}
					?>
				</form>
			</div>
		</div>
	</div>
</div>
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