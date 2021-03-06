<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
//semakPembolehubah($data,'data');
#-----------------------------------------------------------------------------------------------------------
?>

<div class="container mt-3">
<div class="row">
	<div class="col-6">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
			Tambah Data Mahasiswa
		</button>
		<h3>Daftar Mahasiswa</h3>

		<ul class="list-group">
		<?php foreach($data['mhs'] as $mhs) : ?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?php echo $mhs['nama']?>
				<a href="<?php echo BASEURL; ?>mahasiswa/detail/<?php echo $mhs['id']; ?>" class= "badge badge-primary ">detail</a>
			</li>
		<?php endforeach ?>
		</ul><!-- / class="list-group" -->
	</div>
</div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="modal-header">
		<h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="modal-body">
		<form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
		<input type="hidden" name="id" id="id">

		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="form-group">
			<label for="nrp">NRP</label>
			<input type="number" class="form-control" id="nrp" name="nrp">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="nrp" name="email">
		</div>

		<div class="form-group">
			<label for="jurusan">Jurusan</label>
			<select class="form-control" id="jurusan" name="jurusan">
				<option value="Computer Science">Computer Science</option>
				<option value="Information Security">Information Security</option>
				<option value="Information System">Information System</option>
				<option value="Cybersecurity">Cybersecurity</option>
				<option value="Haker">Haker</option>
			</select>
		</div>
	</div>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Tambah Data</button>
	</div>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
</div>
</div>
</div>