@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Item Edit (Form/ Old value)</h2>
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('items.update',$item->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label class="col-sm-2">Code No</label>
				<input type="number" name="codeno" class="form-control col-sm-5" value="{{$item->codeno}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$item->name}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5">
			</div>
			<div class="col-sm-12">
				<img src="{{asset($item->photo)}}" class="img-fluid">
				<input type="hidden" name="oldphoto" value="{{$item->photo}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Price</label>
				<input type="number" name="price" class="form-control col-sm-5"value="{{$item->price}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Discount</label>
				<input type="number" name="discount" class="form-control col-sm-5"value="{{$item->discount}}">
				<br>
			</div>
			
			<div class="form-group row">
			<label class="col-sm-2">Description</label>
			<textarea class="form-control col-sm-5" name="description">{{$item->description}}</textarea>
		</div>

		<div class="form-group row">
			<label class="col-sm-2">Brand:</label>
			<select class="form-control col-sm-5" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
				
				<option value="{{$brand->id}}">{{$brand->name}}</option>
				@if ($brand->id == $item->brand_id)
				{{'selected'}}
				@endif
				>{{$brand->name}}
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
				@if ($subcategory->id == $item->subcategory_id)
				{{'selected'}}
				@endif
				>{{$subcategory->name}}
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