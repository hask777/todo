<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Single todo</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center my-5">
			{{ $todo->name }}
		</h1>

		<div class="card card-default">
			<div class="card-header">
				details
			</div>

			<div class="card-body">
				{{ $todo->description }}
			</div>
		</div>
	</div>
	
</body>
</html>