@extends('admin.layouts.layout')

@section('page-title', 'Order')

@section('page-vendor')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendors/css/charts/apexcharts.css">
@endsection

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/plugins/charts/chart-apex.min.css">
@endsection

@section('custom-css')
@endsection

@section('content')

    <style>
        .borderclass {
            border: 5px dashed rgb(41, 41, 247);
            /* padding: 2%; */
        }

        .center {
            margin: auto;
            width: 100%;
            border: 2px dotted rgb(17, 31, 231);
            /* text-align: center; */
            margin-top: 10px;
        }

        table th,
        td {
            border: 2px solid rgb(71, 66, 66);
        }

        table th,
        td,
        img {
            width: 50px;
            height: 50px;
        }

        .center td {
            background-color: rgb(47, 90, 90);
            /* padding: 10px; */
            color: #fff;
        }
    </style>
    {{-- @dd($categories) --}}
    <div class="borderclass">
        <h1 class="text-center">All Order</h1>
        <table class="text-center center ">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>User_id</td>
                    <td>Product_title</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Product_id</td>
                    <td>Delivery_status</td>
                    <td>Payment_status</td>
                    <td>Image</td>
                    <td>Deliver</td>
                    <td>Print PDF</td>
                </tr>
                @foreach ($orders as $order)
                    
               
                    <tr>
                        <th>{{$order->name}}</th>
                        <th>{{$order->email}}</th>
                        <th>{{$order->phone}} </th>
                        <th>{{$order->address}}</th>
                        <th>{{$order->user_id}}</th>
                        <th>{{$order->product_title}}</th>
                        <th>{{$order->quantity}}</th>
                        <th>{{$order->price}}</th>
                        <th>{{$order->product_id}}</th>
                        <th>{{$order->delivery_status}}</th>
                        <th>{{$order->payment_status}}</th>
                        <th><img src="admin/images/{{$order->image}}" alt=""></th>
                        <th style="padding: 2px;">
                            
                            @if ($order->delivery_status == 'Processing')
                            <a href="{{url('deliver',$order->id)}}" onclick=" return confirm('Are You Sure This Product is Delivered') " class="btn btn-relief-outline-success" style=""> Deliver</a>
                                
                            @else
                            <p style="color:rgb(30, 104, 104);font-size:15px;">Delivered</p>
                            @endif
                        
                        </th>
                        <th>
                            <a href="{{url('Print-pdf',$order->id)}}" class="btn btn-relief-outline-danger">PDF</a>
                        </th>
                    </tr>
                    @endforeach
               </tbody>
        </table>
    </div>

@endsection

@section('vendor-js')
    <script src="{{ asset('admin') }}/vendors/js/charts/apexcharts.min.js"></script>
@endsection

@section('page-js')
    <script src="{{ asset('admin') }}/js/scripts/pages/dashboard-ecommerce.min.js"></script>
@endsection
@section('custom-js')

@endsection
