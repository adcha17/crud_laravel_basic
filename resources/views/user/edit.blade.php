<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Usuario</title>
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		
		<h1>Edición de Usuarios</h1>
		<h4><a href="{{route('users.index')}}">Listar usuarios</a></h4>
		<hr>
		<form action="/users/{{$user->id}}" method="POST">

			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label for="">Nombres</label>
				<input type="text" name="name" class="form-control" placeholder="Nombres" value="{{$user->name}}">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password" name="password" class="form-control" placeholder="Contraseña">
			</div>
			<button type="submit" class="btn btn-success">Actualizar</button>
		</form>
	
	</div>
</body>
</html>