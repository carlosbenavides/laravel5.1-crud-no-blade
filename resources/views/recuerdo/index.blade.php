<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Yo soy inicio</h1>
	<table border=1>
		<thead>
			<tr>
				<td>Titulo</td>
				<td>Contenido</td>
				<td>Mostrar</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<?php foreach ($data as  $value) { ?>

			<tr>
				<td><?php echo $value['titulo'] ?></td>
				<td><?php echo $value['contenido']?></td>
				<td><a href="recuerdo/<?php echo $value['id'] ?>" >Mostrar</a></td>
				<td><a href="recuerdo/<?php echo $value['id'] ?>/edit" >Editar</a></td>
				<td>
					<form action="recuerdo/<?php echo $value['id'] ?>" method="POST">
						<input type="hidden" name="_method" value="DELETE">
						<input name="_token" type="hidden" value="{!! csrf_token() !!}"/>
						<input type="submit" value="eliminar">
					</form>

				</td>
			</tr>
		 <?php } ?>		
	</table>
</body>
</html>