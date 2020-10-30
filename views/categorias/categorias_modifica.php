<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<?php include_once("views/includes/head.php") ?>
	</head>

	<body>
		<?php include_once("views/includes/navbar.php") ?>
		<div class="container">

			<h2><?php echo $data["titulo"]; ?></h2>

			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=categorias&a=actualizar" autocomplete="off">

				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />

				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $data["categorias"]["name"]?>" />
				</div>

				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>

			</form>
		</div>
	</body>
</html>