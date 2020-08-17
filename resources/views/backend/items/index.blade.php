@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block">Item list (UI)</h2>
	<a href="{{route('items.create')}}" class="btn btn-success float-right">Add Item</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Codeno</th>
				<th>Name</th>
				<th>Price</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($items as $item)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$item->codeno}} <a href="{{route('items.show',$item->id)}}"><span class="badge badge-primary badge-pill">Detail</span> </a>
				<a href="#" class="box badge badge-primary badge-pill" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc={{$item->description}}><span class="badge badge-primary badge-pill"> Modal</span></a>
				</td>
				<td>{{$item->name}}</td>
				<td>{{$item->price}} MMK</td>
				<td>
					<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning">Edit</a>
					
					<form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block" >
						@csrf
						@method("DELETE")
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						
					</form>
					

				</td>
				
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
</div>


{{--Detail Modal --}}
<div class="modal fade" id="mymodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"></h4>
				
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" class="img-fluid w-50" id="photo">
						
					</div>
					<div class="col-md-6">
						Price: <strong id="price"></strong><br>
						Description: <strong id="desc"></strong>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.box').click(function(){
			// alert('Box!!!');

			var name=$(this).data('name');
			var photo=$(this).data('photo');
			var price=$(this).data('price');
			var desc=$(this).data('desc');

			$('.modal-title').text(name);
			$('#photo').attr('src',photo);
			$('#price').text(price);
			$('#desc').text(desc);
			$('#mymodal').modal('show');



		})
	})
</script>

@endsection