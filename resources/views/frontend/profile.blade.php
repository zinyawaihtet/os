@extends('frontendtemplate')
@section('content')
<div class="col-lg-6">
	<h2>Customer Profile Page</h2>
	
        <!-- map and forms -->
       <div class="container my-5">

       		<div class="row">
       			<div class="col-lg-6 col-md-12 col-sm-12 text-center">
       				<img src="{{asset('login.jpg')}}" class="img-fluid">
       			</div>
       			<div class="col-lg-6 col-md-6 col-sm-12">
       				<div class="row">
       					<form name="send_form" class="w-100">
	       					<div class="col-lg-12 col-md-12 col-sm-12 form-group">
	       						<input type="text" placeholder="Your Name" id="cname" name="cname" class="form-control" required="required">
	       					</div>
	       					<div class="col-lg-12 col-md-12 col-sm-12 form-group">
	       						<input type="email" placeholder="Your email" id="cemail" name="cemail" class="form-control" required="required">
	       					</div>
	       					<div class="col-lg-12 col-md-12 col-sm-12 form-group">
	       						<input type="text" placeholder="Phone Number" id="cphone" name="csubject" class="form-control" required="required">
	       					</div>
	       					<div class="col-lg-12 col-md-12 col-sm-12 form-group">
	       						<textarea class="form-control" id="caddress" name="caddress" placeholder="Address" required="required"></textarea>
	       					</div>
	       					<div class="ml-3">
	       						<button type="submit" class="btn btn-outline-info" onclick="sendForm()">Send</button>
	       					</div>
	       				</form>
       				</div>
       			</div>
       		</div>
       </div>
	
</div>
@endsection
