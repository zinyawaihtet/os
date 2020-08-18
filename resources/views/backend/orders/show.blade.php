@extends('backendtemplate')

@section('content')

  <div class="container table-responsive">
    <div class="row border border-dark">
      <div class="col-md-12 text-center">
        <h3 class="py-2">Zin Online Shop</h3>
        <p class="text-center">Mandalay</p>
        <p class="text-center">Tel: 09458976589</p>
      </div>
      <div class="col-md-6">
       <div class="row">
        <div class="col-md-6">
          
          <p>Voucher No: {{$order->voucherno}}</p>
          <p>Casher: Zin Zin	</p>
        </div>

        
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <p> Order Date</p>
          <p>Order Time</p>

        </div>
        <div class="col-md-6">
          <p> {{date('Y-m-d')}}</p>
          <p> {{date('h-i-s A')}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <table  width="100%" cellpadding="7" border="border border-dark">
      <thead>
        <tr>
          <th>Item Name</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Amount</th>
        </tr>
      </thead>

      <tbody>
      	@php 
      		$total=0; 
      		@endphp
        @foreach($order->items as $item)
       
        	
        	@php $price=$item->price; @endphp
        	@php $discount=$item->discount; @endphp
        	@if($discount)
        	@php $unit_price=$discount; @endphp
        	@else
        	@php $unit_price=$price; @endphp
        	@endif

        	<tr>
        		<td>{{$item->name}}</td>
        		<td>{{$unit_price}}</td>
        		<td>{{$item->getRelationValue('pivot')->qty}}</td>
        		<td>{{$amount=$unit_price*$item->getRelationValue('pivot')->qty}}</td>
        	</tr>
        	@php $total+=$amount; @endphp
        @endforeach
        
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Total Amount</td>
          <td>
            {{$total}}
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

@endsection