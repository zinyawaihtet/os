@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Category Edit (Form/ Old value)</h2>
	
	<div class="container">
		<form enctype="multipart/form-data" method="post" action="{{route('categories.update',$categories->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" class="form-control col-sm-5" value="{{$categories->name}}">
			</div>
			<div class="form-group row">
				<label class="col-sm-2">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5">
			</div>
			<div class="col-sm-12 py-5">
				<img src="{{asset($categories->photo)}}" class="img-fluid">
				<input type="hidden" name="oldphoto" value="{{$categories->photo}}">
			</div>
			
		
		<div class="form-group">	
			<input type="submit" value="update" class="btn btn-primary">
		</div>
	</form>
	</div>
	
</div>


@endsection