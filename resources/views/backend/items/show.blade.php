@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2>Item Detail (Form) </h2>
	<div class="row">
	
	<div class=" row col-md-8 mt-2 pt-2">
	<table class="table table-bordered">
		<thead>
			<tr>
				
				<th>Photo</th>
				<th>Name</th>
				<th>Code</th>
				<th>Price</th>
				

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><img src="{{asset($item->photo)}}"></td>
				<td>{{$item->name}}</td>
				<td>{{$item->codeno}} <a href="{{route('items.show',$item->id)}}"></a></td>
				
				<td>{{$item->price}} MMK</td>
				
				
			</tr>
			
		</tbody>
		
	</table>

	</div>
	</div>
</div>

@endsection