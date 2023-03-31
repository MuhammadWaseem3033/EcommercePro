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
        #Hovering a:hover{
            background-color: brown;
            color: aliceblue;
            width: 10px;
            height: auto;
            padding: 5px;
        }
    </style>
    {{-- @dd($categories) --}}
    <div class="borderclass">
       <a class="btn btn-relief-outline-primary""
        style="margin:5px;margin-left:85%;" data-bs-toggle="tooltip" href="{{route('admin.create.category')}}"><i class="" style="font-size: 1.1rem" class="m-10">Create Category</i>
      </a>
        <h1 class="text-center">All Category</h1>
        <table class="table" style="border:1px solid black;">
            <tbody class="custom_detail_tbl">
                <tr class="custom_detail_tbl">
                    <td class="custom_detail_tbl w-30">
                        Category Name
                    </td>
                    <td class="custom_detail_tbl w-40">
                        Parent Name
                    </td>
                    <td class="custom_detail_tbl w-30">
                        Action
                    </td>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->category_name }}</th>
                        <th>{{ $category->parent_id }}</th>
                        <th > <a href="{{url('delete-category',$category->id)}}" class="btn btn-relief-outline-danger" onclick="return confirm('Are you sure Delete This Category')">Delete</a>
                            <a href="" class="btn btn-relief-outline-info">Edit</a>
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
