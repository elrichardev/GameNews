	<?php
	require('db.php');
	$status = "";
	if(isset($_POST['new']) && $_POST['new']==1){
		$trn_date = date("Y-m-d H:i:s");
		$titulo =$_REQUEST['titulo'];
		$categoria = $_REQUEST['categoria'];
		$cuerpo = $_REQUEST['cuerpo'];
		$ins_query="insert into new_record
		(`trn_date`,`titulo`,`categoria`,`submittedby`, `cuerpo`)values
		('$trn_date','$titulo','$categoria','admin', '$cuerpo')";
		mysqli_query($con,$ins_query)
		or die(mysql_error());
		$status = "Noticia insertada correctamente!";
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>GameNews-Insert</title>
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
				<a class="navbar-brand"  href="index2.html"><dt><big>GameNews Insert</big></dt></a>

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

				<form class="container-fluid justify-content-end" action="dashboard.php">
					<button
					class="btn btn-outline-danger"
					type="submit"
					id="registro"
					data-mdb-ripple-color="dark"
					>
					Panel de Control
				</button>
			</form>

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
		<h2><span class="badge badge-pill badge-secondary bg-dark">Insertar nuevas noticias</span></h2>
	</div>
</div>
<div class="container">
	<form action="" method="post" name="form" class="was-validated">
		<input type="hidden" name="new" value="1" />
		<div class="form-group">
			<label for="uname">Titulo:</label>
			<input type="text" class="form-control" id="uname" placeholder="Titulo de la noticia" name="titulo" required>
			<div class="valid-feedback">Correcto.</div>
			<div class="invalid-feedback">Necesario rellenar para continuar.</div>
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Contenido Noticia</label>
			<input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contenido de la noticia" name="cuerpo" required></textarea>
			<div class="valid-feedback">Correcto.</div>
			<div class="invalid-feedback">Necesario rellenar para continuar.</div>
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Selecciona la categoría</label>
			<input type="text" class="form-control" id="categoria" name="categoria" placeholder="Introduce la categoría">
			<small id="emailHelp" class="form-text text-muted">1: LoL, 2: Valorant, 3: CS:GO, 4: COD, 5: Smite</small>
		</div>
		<div class="text-center">
			<button name="submit" type="submit" class="btn btn-dark w-50">Enviar</button>
		</div>
	</form>

	<br>
	<div class="alert alert-warning" role="alert">
		<?php echo $status; ?>
	</div>
</div>
<br><br><br>
<div class="bg-dark fixed-bottom text-center p-3" id="copyright" style="background-color: rgba(0, 0, 0, 0.2)">
	© 2020 Copyright:
	<a class="text-light" href="index.html">GameNews.com</a>
</div>
</div>
</body>
</html>