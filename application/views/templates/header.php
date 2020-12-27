<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets');?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets');?>/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets');?>/dataTable/datatables.min.css">
	<link rel="stylesheet" href="<?= base_url('assets');?>/css/style.css">
	<title><?php echo $judul; ?> </title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fa fa-user"></i> Nusa Mandiri</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
					<a class="nav-item nav-link" href="#">About</a>
				</div>
			</div>
		</div>
	</nav>