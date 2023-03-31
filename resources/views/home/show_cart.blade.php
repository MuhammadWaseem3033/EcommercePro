@extends('home.layouts.main')
@section('content')
<div class="row m-auto">
    <div class="col-12">
<table class="table w-4/5" >
    <thead class="table-dark">
        <tr>
            <th scope="col">Product Title</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
    </thead>
    <tbody>
        @php
            $totalprice = 0 ; 
        @endphp
        @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{ $cart->product_title}}</th>
            <td>{{ $cart->quantity}}</td>
            <td>{{ $cart->price}}</td>
            <td><img src="admin/images/{{$cart->image}}" alt="" width="100px" height="100px"></td>
            <td> <a href="{{url('remove-product',$cart->id)}}" class="btn btn-warning me-1 " onclick="return confirm('Are you sure Remove This')" >Remove</a></td>
          </tr>
          @endforeach
          
          @php
          $totalprice =$totalprice + $cart->price;
          @endphp
        
         
    </tbody>
  </table>
<div class="p-3" style="margin-left: 13rem;">
    <h1 style="">Total Price :{{$totalprice}}</h1><br>
  </div>
  <div class="p-3" style="margin-left: 8rem;">
    <a href="{{url('/cash_order')}}" class="btn btn-info">Cash on delivery</a>
    <a href="" class="btn btn-info">Pay on Card </a>
  </div>
</div>
</div>
       
     
     @endsection
