<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios Laravel</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="contaner">
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
						<td>
							<td>{{ $row->name }}</td>
							<td>{{ $row->email }}</td>
							<td>{{ $row->created_at }}</td>
							<td></td>
						</td>
					</tbody>
					@endforeach
				</table>
			@endif
		</div>
	</div>
</body>
</html>