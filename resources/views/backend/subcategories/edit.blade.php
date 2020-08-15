@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Subcategory Edit (Form/ Old value)</h2>

	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('subcategories.update',$subcategory->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$subcategory->name}}">
			</div>

			<div class="form-group row">
			<label class="col-sm-2">Category:</label>
			<select class="form-control col-sm-5" name="category">
				<optgroup label="Choose Category">
					@foreach($categories as $category)
				
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</optgroup>
				</select>
		</div>
			
		
		<div class="form-group">	
			<input type="submit" value="update" class="btn btn-primary">
		</div>
	</form>
	</div>
	
	
</div>

@endsection