<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Formulario de registro</h1>
	@if(count($errors) > 0)
	<?php dd($errors->all()) ?>

	@endif
	<form action="../recuerdo" method="POST">
		<div>
			<label for="">Titulo</label>
			<input type="text" name="titulo">
		</div>

		<div>
			<label for="">Contenido</label>
			<input type="text" name="contenido">
		</div>

		  <input name="_token" type="hidden" value="{!! csrf_token() !!}"/>
		<div>
			<input type="submit" value="registrar">
		</div>
	</form>
</body>
</html>
