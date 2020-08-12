@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Category list (UI)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Category</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Photo</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Category One</td>
				<td>7000 MMK</td>
				<td>
					<a href="{{route('categories.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>

				</td>
			</tr>
		</tbody>
		
	</table>
	
</div>

@endsection