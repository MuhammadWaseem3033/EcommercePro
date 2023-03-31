@extends('admin.layouts.layout')

@section('page-title', 'Product')

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
        padding: 2%;
    }
    .center{
        margin: auto;
        width: 100%;
        border: 2px dotted rgb(17, 31, 231);
        text-align: center;
        margin-top: 10px;
    }
    table th ,td {
        border: 1px solid rgb(131, 74, 74);
    }
    table th ,td ,img{
        width: 50px;
        height: 50px;
    }
    .center  td{
        background-color: aqua;
        padding: 10px;
    }

</style>
{{-- @dd($categories) --}}
<div class="borderclass">
   <a class="btn btn-relief-outline-primary" 
    style="margin:5px;margin-left:85%;" data-bs-toggle="tooltip" href="{{route('admin.product.create.product')}}"><i class="" style="font-size: 1.1rem" class="m-10">Add Product</i>
  </a>
    <h1 class="text-center">All Category</h1>
    <table class="text-center center"  >
        <tbody>
            <tr>
                <td>
                    Title
                </td>
                <td >
                    Price
                </td>
                <td >
                    Quantity
                </td>
                <td >
                     Discout Price
                </td>
                <td >
                     image
                </td>
                <td>
                    Category 
                </td>
                <td >
                    Discription 
                </td>
                <td >
                    Action 
                </td>
            </tr>
            @foreach ($products as $product)                          
                <tr>
                    <th>{{$product->title}}</th>
                    <th>{{$product->price}}</th>
                    <th>{{$product->quantity}}</th>
                    <th>{{$product->discount_price}}</th>
                    <th> <img src="admin/images/{{$product->image}}" alt=""></th>
                    <th>{{$product->category->category_name}}</th>
                    <th>{!!$product->description!!}</th>

                    <th> <a href="{{url('delete-product',$product->id)}}" class="btn btn-relief-outline-warning me-1 " onclick="return confirm('Are you sure Delete This Category')" >Delete</a>
                        <a href="{{url('update-product',$product->id)}}" class="btn btn-relief-outline-info me-1 ">Edit</a>
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
