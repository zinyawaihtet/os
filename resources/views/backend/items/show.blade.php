@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="text-gray py-3">Item Detail (Form) </h2>
	<div class="row">
	
	<div class="col-md-4 px-5">
		<img src="{{asset($item->photo)}}" class="img-fluid">
	</div>
	
 		<div class="col-md-8 text-justify">

			<h5 class="text-dark">Name: <span class="text-muted">{{$item->name}}</span></h5>
			<h5 class="text-dark">Code Number: <span class="text-muted">{{$item->codeno}} <a href="{{route('items.show',$item->id)}}"></a></span></h5>
				
			<h5 class="text-dark">Price: <span class="text-muted">{{$item->price}} MMK</span></h5>
			<h5 class="text-dark">Brand_id: <span class="text-muted">{{$item->brand->name}}</span></h5>

			<h5 class="text-dark">Subcategory_id: <span class="text-muted">{{$item->subcategory->name}}</span></h5>


		</div>
	</div>
	
</div>

@endsection