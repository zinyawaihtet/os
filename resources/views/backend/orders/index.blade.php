@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Order list (UI)</h2>
	<a href="#" class="btn btn-success float-right">Add Item</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Order Date</th>
				<th>Note</th>
				<th>User Name</th>
				<th>Total</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}} {{-- <a href="{{route('orders.show',$order->id)}}"><span class="badge badge-primary badge-pill">Detail</span> </a> --}}</td>
				<td>{{$order->voucherno}}</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->note}}</td>
				<td>{{$order->user->name}}</td>
				<td>{{$order->total}}</td>


				<td>
					<a href="{{route('orders.show',$order->id)}}" class="btn btn-warning">Detail</a>
					
					<a href="" class="btn btn-danger">Confirm</a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
</div>


@endsection