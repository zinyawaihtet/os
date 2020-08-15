@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="text-gray py-3">Order Detail (Form) </h2>
	<div class="row">
	
	
 		<div class="col-md-8 text-justify">
			<h5 class="text-dark">No: <span class="text-muted">{{$order->id}}</span></h5>

			<h5 class="text-dark">Voucherno: <span class="text-muted">{{$order->voucherno}}</span></h5>
			<h5 class="text-dark">Order Date: <span class="text-muted">{{$order->orderdate}} <a href="{{route('orders.show',$order->id)}}"></a></span></h5>
				
			<h5 class="text-dark">Note: <span class="text-muted">{{$order->note}}</span></h5>
			<h5 class="text-dark">Total: <span class="text-muted">{{$order->total}}</span></h5>

			
		</div>
	</div>
	
</div>

@endsection