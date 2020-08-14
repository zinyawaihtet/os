@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Brand Create (Form)</h2>
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
		<form enctype="multipart/form-data" method="post" action="{{route('brands.store')}}">
			@csrf
			
			<div class="form-group row">
				<label class="col-sm-2">Name</label>
				<input type="text" name="name" placeholder="Your Name" class="form-control col-sm-5 {{$errors->has('name')? 'border-danger':''}}">
				<span style="color: red;">{{$errors->first('name')}}</span>
				
			</div>
			<div class="form-group row">
				<label class="col-sm-2 w-50">Photo</label>
				<input type="file" name="photo" class="form-control col-sm-5 {{$errors->has('photo')? 'border-danger':''}}"><span style="color: red;">{{$errors->first('photo')}}</span>

			</div>
			

		
		
		
		<div class="form-group">	
			<input type="submit" value="save" class="btn btn-primary">
		</div>
	</form>
</div>
</div>

@endsection