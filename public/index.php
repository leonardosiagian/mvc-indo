<?php
#-----------------------------------------------------------------------------------------------------------
function diatas()
{
print <<<END
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Bootstrap & Font Awesome</title>
<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
END;
}
#-----------------------------------------------------------------------------------------------------------
function ditengah($namafail)
{
	diatas();
print <<<END
<br><br>
<div class="container mt-10">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Ini Folder <strong>$namafail</strong></h1>
		<p class="lead">Selamat datang kawan.</p>
	</div>
</div>
</div><!-- class="container" -->
END;
	dibawah();
}
#-----------------------------------------------------------------------------------------------------------
function dibawah()
{
print <<<END
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
END;
}
#-----------------------------------------------------------------------------------------------------------
	function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		if($p == '2') var_dump($senarai);
		echo '</pre>';//*/
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#-----------------------------------------------------------------------------------------------------------
//$namafail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
//$namafail = basename(__DIR__);//Returns The Current PHP Folder
//ditengah($namafail);
#-----------------------------------------------------------------------------------------------------------
# mula koding asas
//semakPembolehubah($_GET['url'],'url');
require_once '../app/init.php';
$app = new App;
