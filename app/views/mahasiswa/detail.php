<?php
#-----------------------------------------------------------------------------------------------------------
//$fail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$fail = 'Index';
$folder = basename(__DIR__);//Returns The Current PHP Folder
$p = BASEURL . 'mahasiswa';
#-----------------------------------------------------------------------------------------------------------
?><h3><?php echo $data['tajukAtas'] ?></h3>
<div class="container mt-5">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?php echo $data['mhs']['nama'] ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?php echo $data['mhs']['nokp'] ?></h6>
			<p class="card-text"><?php echo $data['mhs']['email'] ?></p>
			<p class="card-text"><?php echo $data['mhs']['jurusan'] ?></p>
			 <a href="<?php echo $p ?>"  class="badge badge-primary">Kembali</a>
		</div>
	</div>
</div><!-- class="container" -->
