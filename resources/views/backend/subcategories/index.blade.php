@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Subcategory list (UI)</h2>
	<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Subcategory Item</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Category_id</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Su Su</td>
				<td>Category</td>
				<td>
					<a href="{{route('subcategories.edit',1)}}" class="btn btn-warning">Edit</a>
					<a href="#" class="btn btn-danger">Delete</a>

				</td>
			</tr>
		</tbody>
		
	</table>
	
</div>

@endsection