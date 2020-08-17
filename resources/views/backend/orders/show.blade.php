@extends('backendtemplate')

@section('content')

<div class="container-fluid table-responsive">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Order Detail</h1>



    <a href="index.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Dashboard</a>
  </div>

  <div class="container table-responsive">
    <div class="row border border-dark">
      <div class="col-md-12 text-center">
        <h3 class="py-2">Zin Online Shop</h3>
        <p class="text-center">Mandalay</p>
        <p class="text-center">09458976589</p>
      </div>
      <div class="col-md-6">
       <div class="row">
        <div class="col-md-6">
          
          <p>Voucher No</p>
          <p>:{{$order->voucherno}}</p>
        </div>

        <div class="col-md-6">
          <p>: Zin Zin</p>
          
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
          <p> {{$order->orderdate}}</p>
          <p> {{$order->orderdate}}</p>
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
        @foreach($order->items as $item)
        <tr>
        	<td>{{$item->name}}</td>
        	<td>{{$item->price}}</td>
        	<td>{{$item->qty}}</td>
        	<td>{{$item}}</td>
        @endforeach
        </tr>
      </tbody>
      <tfoot>
        {{-- <tr>
          <td colspan="3">Total Amount</td>
          <td>
            {{$order->total}}
          </td>
        </tr> --}}
      </tfoot>
    </table>
  </div>
</div>

@endsection