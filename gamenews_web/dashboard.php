<?php
	require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/png" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameNews-Admin</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
		<!-- Container wrapper -->
		<div class="container-fluid">
		<!-- Navbar brand -->
			<a class="navbar-brand"  href="index2.html"><dt><big>GameNews - ControlPanel</big></dt></a>

			<!-- Toggle button -->
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Login Buttons -->
					<form class="container-fluid justify-content-end" action="logout.php">
						<button
							class="btn btn-outline-primary"
							type="submit"
							id="registro"
							data-mdb-ripple-color="dark"
							>
							Desconectar
						</button>
					</form>
			</div>
			<!-- Collapsible wrapper -->
		</div>
		<!-- Container wrapper -->
	</nav>
<!-- Navbar -->
	
	<div class="container">
	<br><br>
		<div class="text-center">
			<h2><span class="badge badge-pill badge-secondary bg-dark">Bienvenido al panel de control de GameNews</span></h2>
			<br>
			<p>Selecciona la acción que deseas realizar.</p>
			<div class="row">
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
					<p><a href="insert.php">Insertar noticias</a></p>
				</div>
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
					<p><a href="view.php">Ver / Eliminar noticias</a><p>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="bg-dark fixed-bottom text-center p-3" id="copyright" style="background-color: rgba(0, 0, 0, 0.2)">
				© 2020 Copyright:
		<a class="text-light" href="index.html">GameNews.com</a>
	</div>
	
</body>
</html>