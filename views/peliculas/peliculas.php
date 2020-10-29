<!DOCTYPE html>
<html lang="es">
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

			<a href="index.php?c=peliculas&a=nuevo" class="btn btn-primary">Agregar</a>

			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>ID</th>
							<th>NOMBRE</th>
							<th>DESCRIPCIÓN</th>
							<th>AÑO</th>
							<th>CATEGORÍA</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["peliculas"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["id"]."</td>";
							echo "<td>".$dato["name"]."</td>";
							echo "<td>".$dato["description"]."</td>";
							echo "<td>".$dato["year"]."</td>";
							echo "<td>".$dato["categoria_id"]."</td>";
							echo "<td><a href='index.php?c=peliculas&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=peliculas&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>