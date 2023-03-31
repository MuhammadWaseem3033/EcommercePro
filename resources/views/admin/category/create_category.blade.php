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
    </style>
    {{-- @dd($categories->cate) --}}
    <div class="borderclass">
        <h1 class="text-center"> Add Category</h1>
        <form action="{{ url('add-category') }}" method="post" >
            @csrf
            <div class="col-md-12">
                <label class="form-label" for="select2-disabled-result">Category
                </label>
                <select class="select form-select" name="category_id" id="main_category">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" data-id="{{ $category->id }}">{{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="select2-disabled-result">Add Category</label>
                <input class="browser-default form-select" type="text" name="category_name" id="sub_category" required>
            </div><br>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
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
