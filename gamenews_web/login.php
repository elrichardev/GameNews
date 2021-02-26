<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login GameNews</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" type="image/png" href="img/logo.png">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	require('db.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
		$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
			if($username == 'admin'){
			header("Location: dashboard.php");
			}else{
			header("Location: index2.php"); // Redirect user to index.php
			}
		 // Redirect user to index.php

		}else{

			echo'<script type="text/javascript">
			alert("Contraseña o Usuario incorrecto!");
			window.location.href="login.php";
			</script>';
		}
	}else{
		?>


		<!-- Navbar -->

		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<!-- Container wrapper -->
			<div class="container-fluid">
				<!-- Navbar brand -->
				<a class="navbar-brand"  href="index.html"><dt><big>GameNews</big></dt></a>

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

		<form class="container-fluid justify-content-end" action ="registro.php">
		<button
		class="btn btn-warning"
		type="submit"
		id="regitro"
		data-mdb-ripple-color="warning"
		>
		Registro
	  </button>
	</form>
		</div>
	</div>
	</nav>

	<div class="container">
<br><br><br><br><br>
  <h2>Login GameNews</h2>
  <form action="" method="post" name="login" class="was-validated">
	<div class="form-group">
	  <label for="uname">Usuario:</label>
	  <input type="text" class="form-control" id="uname" placeholder="Usuario" name="username" required>
	  <div class="valid-feedback">Correcto.</div>
	  <div class="invalid-feedback">Necesario rellenar para continuar.</div>
	</div>
	<div class="form-group">
	  <label for="pwd">Contraseña:</label>
	  <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="password" required>
	  <div class="valid-feedback">Correcto.</div>
	  <div class="invalid-feedback">Necesario rellenar para continuar.</div>
	</div>
	<div class="text-center">
	<button name="submit" type="submit" class="btn btn-dark w-50">Login</button>
</div>
  </form>
  <div class="text-center">
  <p>¿Todavía no te has registrado? <a href='registro.php'><br>Registrate aquí!</a>
  </div>
</div>
<?php } ?>

</body>
</html>
