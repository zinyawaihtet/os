@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Subcategory Create (Form)</h2>
	{{-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('subcategories.store')}}">
			@csrf
			
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" placeholder="Your Name" class="form-control col-sm-5 {{$errors->has('name')? 'border-danger':''}}">
			</div>
		
		
		<div class="form-group row">
			<label class="col-sm-2">Category</label>
			<select class="form-control col-sm-5" name="category">
				<optgroup label="Choose Subcategory">
					@foreach($categories as $category)
				
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endforeach
				</optgroup>
				</select>
		</div>
		<div class="form-group">	
			<input type="submit" value="save" class="btn btn-primary">
		</div>
	</form>
</div>
</div>

@endsection