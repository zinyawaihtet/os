@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Brand Edit (Form/ Old value)</h2>

	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('brands.update',$brand->id)}}">
			@csrf
			@method('PUT')

			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$brand->name}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5">
			</div>

			<div class="col-sm-12">
				<img src="{{asset($brand->photo)}}" class="img-fluid">
				<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
			</div>
			<div class="form-group">	
				<input type="submit" value="update" class="btn btn-primary">
			</div>
		</form>
	</div>
	
</div>

@endsection