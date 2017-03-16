<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios Laravel</title>
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
		<h1>Lista de Usuarios</h1>
		<h4><a href="{{route('users.create')}}">Registrar nuevo usuario</a></h4>
		<hr>
		<div class="table-responsive">
			@if($data)
				<table class="table">
					<thead>
						<tr>
							<td>Nombres</td>
							<td>Email</td>
							<td>Creado</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $row)
						<tr>
							<td>{{ $row->name }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ $row->created_at }}</td>
							<td>
								<a href="{{route('users.edit', $row->id)}}" class="btn btn-info">Editar</a>
								<form action="{{route('users.destroy', $row->id)}}" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-danger">Eliminar</button>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
					
				</table>
			@endif
		</div>
	</div>
	
	
</body>
</html>