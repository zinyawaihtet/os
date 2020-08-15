@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Category list (UI)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Category</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@php $i=1; @endphp
				@foreach($categories as $category)
				<td>{{$i++}}</td>
				<td>{{$category->name}}</td>
				<td><img src="{{$category->photo}}" width="100" height="100"></td>
				<td>
					<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
					<form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block" >
						@csrf
						@method("DELETE")
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
</div>

@endsection