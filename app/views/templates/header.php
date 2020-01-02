<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman <?= $data['judul'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= BASEURL ?>/assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="<?= BASEURL ?>/siswa">Siswa</a>
			<a class="nav-item nav-link" href="<?= BASEURL ?>/about">About</a>
		</div>
	</div>
	<form action="<?= BASEURL; ?>/siswa/cari" method="post" class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="search" placeholder="Cari Siswa ..." name="keyword" id="keyword" autocomplete="off">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tombolCari">Cari</button>
    </form>
</nav>