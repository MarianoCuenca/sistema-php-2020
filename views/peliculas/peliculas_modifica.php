<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>

	<body>
		<div class="container">

			<h2><?php echo $data["titulo"]; ?></h2>

			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=peliculas&a=actualizar" autocomplete="off">

				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />

				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $data["peliculas"]["name"]?>" />
				</div>

				<div class="form-group">
					<label for="description">Descripción</label>
					<input type="text" class="form-control" id="description" name="description" value="<?php echo $data["peliculas"]["description"]?>" />
				</div>

				<div class="form-group">
					<label for="year">Año</label>
					<input type="text" class="form-control" id="year" name="year" value="<?php echo $data["peliculas"]["year"]?>" />
				</div>

				<div class="form-group">
					<label for="categoria_id">Categoría</label>
					<input type="text" class="form-control" id="categoria_id" name="categoria_id" value="<?php echo $data["peliculas"]["categoria_id"]?>" />
				</div>

				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>

			</form>
		</body>
	</html>