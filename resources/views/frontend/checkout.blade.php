@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	

<div class="container">
{{-- <div class="col-lg-6"> --}}
	

<div class="my-2 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-10">
				<h3 class="py-3">Check Out Page</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Photo</th>
								<th>Price</th>
								<th>Discount</th>
								<th>Qty</th>
								<th>Sub Total</th>

							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>

			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Your Notes Here!"></textarea>
					<input type="hidden" name="" class="total">
				</div>

			</div>
			
			
			<div class="offset-md-2 col-md-3">
				<a href="{{route('homepage')}}" class="btn btn-info">Continue Shopping</a>

			</div>
			<div class="offset-md-2 col-md-3">
				@auth
				<a href="" class="btn btn-info buy_now float-right">Checkout</a>
				@else	
				<a href="{{route('login')}}" class="btn btn-info float-right">Login To Checkout</a>
				@endauth
	
			</div>	
		
		</div>
	</div>
</div>
	
@endsection


@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
	
</script>
@endsection
