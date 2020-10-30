<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<?php include_once("views/includes/head.php") ?>
	</head>
	
	<body>
		<?php include_once("views/includes/navbar.php") ?>
		<div class="container mt-5">
			<div class="container m-5">
				<h2><?php echo $data["titulo"]; ?></h2>
				<div class="float-right">
					<a href="index.php?c=categorias&a=nuevo" class="btn btn-primary pull-right">Agregar</a>
				</div>
			</div><br>

			<div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["categorias"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["id"]."</td>";
							echo "<td>".$dato["name"]."</td>";
							echo "<td><a href='index.php?c=categorias&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=categorias&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>