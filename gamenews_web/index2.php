			<!doctype html>
			<?php
			require('db.php');

		    ?>
			<html lang="en">
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<title>GameNews - Official Website</title>
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			</head>
			<body>

				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
					<!-- Container wrapper -->
					<div class="container-fluid">
						<!-- Navbar brand -->
						<a class="navbar-brand"  href="index2.html"><dt><big>GameNews</big></dt></a>

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
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#lol">LOL</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#valorant">Valorant</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#csgo">CSGO</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#cod">COD</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#smite">Smite</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">WOW</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">FIFA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Fornite</a>
							</li>
						</ul>

						<!-- Left links -->

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

			<!-- Cuerpo Noticias -->




				<div class="list-group" style="padding: 1rem; margin-top: 5rem;">

                   <h2><span class="badge badge-pill badge-secondary bg-dark" id = "lol">LEAGUE OF LEGENDS</span></h2><br>

					<?php
		                            // Obtenemos el parámetro estacion
		                            // Creamos la SQL para obtener los comentarios de esa estación
					$sel_query_comments =
					"SELECT * 
					FROM new_record 
					WHERE categoria = 1";
					$result_comments = mysqli_query($con, $sel_query_comments);
		                            // Guardamos el resultado en row_comments
					while ($row = mysqli_fetch_assoc($result_comments)) { ?>
						<div class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<!-- Mostramos en cada comentario el usuario que lo ha escrito, asi como la hora y el dia en el que fue escrito-->
								<h5 class="mb-1"><?php echo $row["titulo"]; ?></h5>
								<small class="text-muted"><?php echo $row["trn_date"]; ?></small>
							</div>
							<p class="mb-1"><?php echo $row["cuerpo"]; ?></p>
						</div>
						 
				<?php
				 }
				 ?> 




				 <div class="list-group">

				 	 <br><h2><span class="badge badge-pill badge-secondary bg-dark " id = "valorant">VALORANT</span></h2><br>

					<?php
		                            // Obtenemos el parámetro estacion
		                            // Creamos la SQL para obtener los comentarios de esa estación
					$sel_query_comments =
					"SELECT * 
					FROM new_record 
					WHERE categoria = 2";
					$result_comments = mysqli_query($con, $sel_query_comments);
		                            // Guardamos el resultado en row_comments
					while ($row = mysqli_fetch_assoc($result_comments)) { ?>
						<div class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<!-- Mostramos en cada comentario el usuario que lo ha escrito, asi como la hora y el dia en el que fue escrito-->
								<h5 class="mb-1"><?php echo $row["titulo"]; ?></h5>
								<small class="text-muted"><?php echo $row["trn_date"]; ?></small>
							</div>
							<p class="mb-1"><?php echo $row["cuerpo"]; ?></p>
						</div>
						 
				<?php
				 }
				 ?> 

				</div>


                <div class="list-group">

				 	 <br><h2><span class="badge badge-pill badge-secondary bg-dark"id = "csgo">COUNTER STRIKE</span></h2><br>

					<?php
		                            // Obtenemos el parámetro estacion
		                            // Creamos la SQL para obtener los comentarios de esa estación
					$sel_query_comments =
					"SELECT * 
					FROM new_record 
					WHERE categoria = 3";
					$result_comments = mysqli_query($con, $sel_query_comments);
		                            // Guardamos el resultado en row_comments
					while ($row = mysqli_fetch_assoc($result_comments)) { ?>
						<div class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<!-- Mostramos en cada comentario el usuario que lo ha escrito, asi como la hora y el dia en el que fue escrito-->
								<h5 class="mb-1"><?php echo $row["titulo"]; ?></h5>
								<small class="text-muted"><?php echo $row["trn_date"]; ?></small>
							</div>
							<p class="mb-1"><?php echo $row["cuerpo"]; ?></p>
						</div>
						 
				<?php
				 }
				 ?> 

				</div>


				 <div class="list-group">

				 	 <br><h2><span class="badge badge-pill badge-secondary bg-dark"id = "cod">CALL OF DUTY</span></h2><br>

					<?php
		                            // Obtenemos el parámetro estacion
		                            // Creamos la SQL para obtener los comentarios de esa estación
					$sel_query_comments =
					"SELECT * 
					FROM new_record 
					WHERE categoria = 4";
					$result_comments = mysqli_query($con, $sel_query_comments);
		                            // Guardamos el resultado en row_comments
					while ($row = mysqli_fetch_assoc($result_comments)) { ?>
						<div class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<!-- Mostramos en cada comentario el usuario que lo ha escrito, asi como la hora y el dia en el que fue escrito-->
								<h5 class="mb-1"><?php echo $row["titulo"]; ?></h5>
								<small class="text-muted"><?php echo $row["trn_date"]; ?></small>
							</div>
							<p class="mb-1"><?php echo $row["cuerpo"]; ?></p>
						</div>
						 
				<?php
				 }
				 ?> 

				</div>



			   	<div class="list-group">

				 	 <br><h2><span class="badge badge-pill badge-secondary bg-dark"id = "smite">SMITE</span></h2><br>

					<?php
		                            // Obtenemos el parámetro estacion
		                            // Creamos la SQL para obtener los comentarios de esa estación
					$sel_query_comments =
					"SELECT * 
					FROM new_record 
					WHERE categoria = 5";
					$result_comments = mysqli_query($con, $sel_query_comments);
		                            // Guardamos el resultado en row_comments
					while ($row = mysqli_fetch_assoc($result_comments)) { ?>
						<div class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<!-- Mostramos en cada comentario el usuario que lo ha escrito, asi como la hora y el dia en el que fue escrito-->
								<h5 class="mb-1"><?php echo $row["titulo"]; ?></h5>
								<small class="text-muted"><?php echo $row["trn_date"]; ?></small>
							</div>
							<p class="mb-1"><?php echo $row["cuerpo"]; ?></p>
						</div>
						 
				<?php
				 }
				 ?> 

				</div>
			</div>


				<br><br><br><br>
					<!-- Footer -->
				<div class="bg-dark text-light text-center">
					<!-- Grid container -->
					<div class="container p-4">
						<!--Grid row-->
						<div class="row">
							<!--Grid column-->
							<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
								<h5 class="text-uppercase">Contenido Adicional</h5>
								<p>
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
									molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
									voluptatem veniam, est atque cumque eum delectus sint!
								</p>
							</div>
							<!--Grid column-->

							<!--Grid column-->
							<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
								<h5 class="text-uppercase">Links</h5>

								<ul class="list-unstyled mb-0">
									<li>
										<a href="#!">Link 1</a>
									</li>
									<li>
										<a href="#!">Link 2</a>
									</li>
									<li>
										<a href="#!">Link 3</a>
									</li>
								</ul>
							</div>
							<!--Grid column-->
						</div>
						<!--Grid row-->
					</div>
					<!-- Grid container -->
					<!-- Copyright -->
					<div class="text-center p-3" id="copyright" style="background-color: rgba(0, 0, 0, 0.2)">
						© 2020 Copyright:
						<a class="text-light" href="index.html">GameNews.com</a>
					</div>
					<!-- Copyright -->
				</div>
				<!-- Footer -->

			</body>
			</html>