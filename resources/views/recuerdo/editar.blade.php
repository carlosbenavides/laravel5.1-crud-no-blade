<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Editar blog </h1>
	<form action="../../recuerdo/<?php echo $data['id'] ?>" method="POST">
		<div>
			<label for="">Titulo</label>
			<input type="text" name="titulo" value='<?php echo $data['titulo'] ?>'>
		</div>

		<div>
			<label for="">Contenido</label>
			<input type="text" name="contenido" value='<?php echo $data['contenido'] ?>'  >
		</div>

		  <input name="_token" type="hidden" value="{!! csrf_token() !!}"/>
		  <input type="hidden" value='<?php echo $data['id'] ?>'>
		  <input name="_method" type="hidden" value="PUT">
		<div>
			<input type="submit" value="Editar">
		</div>
	</form>
</body>
</html>
