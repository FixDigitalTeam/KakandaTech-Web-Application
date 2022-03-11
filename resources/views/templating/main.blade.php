<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top shadow">
		<div class="container">
			<a href="#" class="navbar-brand">
				<h1><span class="fa fa-globe"></span> <small>PERPUSLA</small></h1>
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ResponsiveNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="ResponsiveNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="/" class="nav-link text-white"><span class="fa fa-dashboard"></span> Dashboard</a>
					</li>&nbsp;&nbsp;
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-secret"></span> Member</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="/registermember" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Reg. Member</a>
							<a href="/datamember" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Data Member</a>
						</div>
					</li>&nbsp;&nbsp;
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user-md"></span> Pegawai</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="/registerpegawai" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Reg. Pegawai</a>
							<a href="/datapegawai" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Data Pegawai</a>
						</div>
					</li>&nbsp;&nbsp;
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-folder-open"></span> Inventori</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="#" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Buku Perpustakaan</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Trx. Peminjaman</a>
							<a href="#" class="dropdown-item"><span class="fa fa-chevron-circle-right"></span> Trx. Pengembalian</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav><br><br><br>
	@yield('container')
	<footer class="footer bg-primary fixed-bottom p-3 text-center text-white">
		<i>Copyright &copy; Fix Digital Team - TIF B Bondowoso</i>
	</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>