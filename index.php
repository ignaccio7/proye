<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-1">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LogoTipo</a>
				</div>
				<!-- aqui inicia el menu -->
				<div class="collapse navbar-collapse" id="navegacion-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="registro.php">Registro</a></li>
					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar">
						</div>
						<button type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>		
	</header>

	<!-- CUERPO DE LA PAGINA -->
	<section class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="post-title">
					Listado de Personas
				</h2>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
						    <tr>
						      	<th scope="col">#</th>
						      	<th scope="col">Nombre</th>
						      	<th scope="col">Paterno</th>
						      	<th scope="col">Zona</th>
						    </tr>
					  	</thead>
						<tbody>
						    <tr>
						      	<th scope="row">1</th>
						     	<td>Mark</td>
						      	<td>Otto</td>
						      	<td>aaaaaaaaaaaa</td>
						    </tr>
						    <tr>
						      	<th scope="row">2</th>
						      	<td>Jacob</td>
						      	<td>Thornton</td>
						      	<td>aaaaaaaaaaaaa</td>
						    </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</section>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>