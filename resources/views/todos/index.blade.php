<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todo list</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	
	<div class="container pb-5">
		<h1 class="text-center my-5">Todos Page</h1>

		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card card-default">
			
					<div class="card-header">
						Todos
					</div>

					<div class="card-body">
						<ul class="list-group">

							@foreach($todos as $todo)
								<li class="list-group-item">
									{{ $todo->name}}

									<a href="todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">
										View
									</a>
								</li>
							@endforeach
							
						</ul>
					</div>
					
				</div>
			</div>		
		</div>

	</div>

</body>
</html>