@extends('home.layouts.main')
@section('content')
<div class="container mt-3 ">
    <table class="table table-bordered m-auto">
      <thead>
        <tr>
          <th>Product Titla</th>
          <th>Quantiy</th>
          <th>Price</th>
          <th>Payment Status</th>
          <th>Deliver Status</th>
          <th>Image</th>
          <th>Cancel</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($orders as $order)
        <tr>
            <td>{{$order->product_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td><img src="admin/images/{{$order->image}}" alt="" width="100px" height="100px"></td>
            @if ($order->delivery_status == 'Processing')
            <td><a href="{{url('cancel-order',$order->id)}}" onclick="return confirm('Are you sure to cancel the Order ')" class="btn btn-success">cancel order</a></td>
            @else
                <p>Test</p>
            @endif
          </tr>
        @empty
        <h5> Not any order in user list </h5>
            
        @endforelse
       
      </tbody>
    </table>
  </div>
  
  
@endsection