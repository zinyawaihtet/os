@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Brand list (UI)</h2>
	<a href="{{route('brands.create')}}" class="btn btn-success float-right">Add Brand</a>
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
				<td>Brand One</td>
				<td>9500 MMK</td>
				<td>
					<a href="{{route('brands.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>

				</td>
			</tr>
		</tbody>
		
	</table>
	
</div>

@endsection