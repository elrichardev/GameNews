<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registro GameNews</title>
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
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo'<script type="text/javascript">
                alert("Registrado correctamente!");
                window.location.href="login.php";
                </script>';
        }
    }else{
?>


<!-- Navbar -->
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
		<!-- Container wrapper -->
		<div class="container-fluid">
			<!-- Navbar brand -->
			<a class="navbar-brand"  href="/index.html"><dt><big>GameNews</big></dt></a>

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


		<form class="container-fluid justify-content-end" action ="login.php">
		<button
		class="btn btn-danger"
		type="submit"
		id="login"
		data-mdb-ripple-color="danger"
		>
		Login
	  </button>
    </form>
	</div>
</div>
</nav>

<div class="container">
<br><br><br>
  <h2>Registro GameNews</h2>
  <form action="" method="post" name="registration" class="was-validated">
  <div class="form-group">
      <label for="uname">Usuario:</label>
      <input type="text" class="form-control" name="username" id="uname" placeholder="Nombre de usuario" required>
      <div class="valid-feedback">Correcto.</div>
      <div class="invalid-feedback">Necesario rellenar para continuar.</div>
    </div>
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uname" placeholder="Email" name="email" required>
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
    	
    <button type="submit" name="submit" class="btn btn-dark w-50 ">Registrar</button>	
    </div>
    


  </form>
</div>
<?php } ?>

</body>
</html>
