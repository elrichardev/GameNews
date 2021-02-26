<?php
	require('db.php');
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
		<title>GameNews - View </title>
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
				<a class="navbar-brand"  href="index2.html"><dt><big>GameNews - View / Delete</big></dt></a>

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


		<table class="table table-bordered">
			<thead>
				<tr class="table-active" align="center">

					<th scope="col">Nº NOTICIA</th>
					<th scope="col">TÍTULO</th>
					<th scope="col">CUERPO</th>
					<th scope="col">CATEGORÍA</th>
					<th scope="col">AUTOR</th>
					<th scope="col">FECHA</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$count=1;
				$sel_query="Select * from new_record ORDER BY id desc;";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { 
			?>
			<tr>

				<td class="table-primary" align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["titulo"]; ?></td>
				<td align="center"><?php echo $row["cuerpo"]; ?></td>
				<td align="center"><?php echo $row["categoria"]; ?></td>
				<td align="center"><?php echo $row["submittedby"]; ?></td>
				<td align="center"><?php echo $row["trn_date"]; ?></td>
				<td class="table-danger" align="center">
					<a href="delete.php?id=<?php echo $row["id"]; ?>">Eliminar</a>
				</td>
			</tr>
			<?php $count++; } ?>
			</tbody>
		</table>
<div class="bg-dark fixed-bottom text-center p-3" id="copyright" style="background-color: rgba(0, 0, 0, 0.2)">
	© 2020 Copyright:
	<a class="text-light" href="index.html">GameNews.com</a>
</div>

</body>
</html>