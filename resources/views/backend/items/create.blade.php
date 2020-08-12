@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Item Create (Form)</h2>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('items.store')}}">
			@csrf
			<div class="form-group row">
				<label class="col-sm-2">Code No</label>
				<input type="number" name="codeno" class="form-control col-sm-5">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Price</label>
				<input type="number" name="price" class="form-control col-sm-5">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Discount</label>
				<input type="number" name="discount" class="form-control col-sm-5">
				<br>
			</div>
			<div class="form-group row">
			<label class="col-sm-2">Description</label>
			<textarea class="form-control col-sm-5" name="description"></textarea>
		</div>

		<div class="form-group row">
			<label class="col-sm-2">Brand:</label>
			<select class="form-control col-sm-5" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
				
				<option value="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach
				</optgroup>
			</select>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-2">Subcategory:</label>
			<select class="form-control col-sm-5" name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
				
				<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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