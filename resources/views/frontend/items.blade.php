@extends('frontendtemplate')
@section('content')
<div class="col-lg-6">
	<h2>Item Page</h2>

	<div class="row">
		@foreach($items as $item)
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">{{$item->name}}</a>
					</h4>
					<h5>{{$item->price}} MMK</h5>
					<p class="card-text">{{$item->description}}</p>
				</div>
				<div class="card-footer">
					<a href="" class="btn btn-info btn-sm">Add To Card</a>
					<a href="{{route('detailpage',$item->id)}}" class="btn btn-primary btn-sm">Detail</a>

				</div>
			</div>
		</div>

		@endforeach	


	</div>
	<!-- /.row -->

</div>

@endsection
