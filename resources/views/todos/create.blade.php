@extends('layouts.app')
@section('content')

<h1 class="text-center my-5">Todos Create</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
		
		<div class="card card-default">
			<div class="card-header">
				create new Todo
			</div>
			<div class="card-body">

				@if($errors->any())

				<ul class="list-group">
					<div class="alert alert-danger">
					@foreach($errors->all() as $error)

						<li class="list-group-item">
							{{ $error }}
						</li>

					@endforeach
				</div>
				</ul>

				@endif

				<form action="/store-todos" method="POST">
					@csrf

					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="name">
					</div>

					<div class="form-group">
						<textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="description">
							
						</textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-success">Create todo</button>
					</div>

				</form>

			</div>
		</div>

	</div>
</div>
	
@endsection