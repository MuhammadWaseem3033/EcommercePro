@extends('admin.layouts.layout')

@section('page-title', 'Update-Product')

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
        #borderclass {
            border: 5px dashed rgb(41, 41, 247);
            padding: 1%;
            
        }
    </style>
    
        <div class="row ">
            <div class="col-md-8"  id="borderclass">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Updata product</h4>
                    </div>
                    <div class="card-body"> 
                        <form class="form form-vertical" action="{{url('/update-product-confirm',$products->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Title</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="title"
                                            value="{{ $products->title }}" placeholder="Product Title" />
                                    </div>
                                </div>
                                {{-- category --}}
                                <div class="col-md-12">
                                  <label class="form-label" for="select2-disabled-result">Category  </label>
                            
                                  <select class="select form-select" name="main_category" id="main_category">   
                                    {{-- @if (count($products) >0) --}}                                                                      
                                      <option value="{{$products->category->category_name}}" data-id="">{{$products->category->category_name}}</option>
                                  </select>
                            
                                </div>
                                <div class="col-md-12">
                                  <label class="form-label" for="select2-disabled-result">Sub Category
                                  </label>
                                  <select class="browser-default form-select" name="sub_category" id="sub_category">                                      
                                    <option value="{{$products->category_id}}">{{$products->category->category_name}}</option>                                     
                                    @foreach ($categories as $category)                                       
                                    <option value="{{$category->id}}" data-id="{{$category->id}}">{{$category->category_name}}</option>
                                  @endforeach
                                </select>
                                </div>
                                {{-- end category --}}
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Price</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="price"
                                            value="{{ $products->price }}" placeholder="Product Price" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Discount Price</label>
                                        <input type="number" id="email-id-vertical" class="form-control"
                                            name="discount_price" value="{{ $products->discount_price }}"
                                            placeholder="Discount Price" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">Product Quantity</label>
                                        <input type="number" min="0" id="email-id-vertical" class="form-control" name="quantity"
                                            value="{{ $products->quantity }}" placeholder="Product Quantity" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    @if ($products->image)
                                    <img src="/admin/images/{{$products->image}}" alt="" width="250px" height="250px">                                        
                                    @else
                                    <h6>image not fount</h6>
                                    @endif
                                
                                </div>                     
                                    
                                <div class="row">                  
                                                                                       
                                    <div class="col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="">Image</label>
                                            <input type="file" id="" class="form-control" name="image"
                                                value="{{ old('image') }}" placeholder="Product Image" />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="">
                                            <label class="form-label" for="">Description</label>
                                            <input type="text"  class="form-control" name="description" value="{{$products->description}}"
                                                placeholder="Product description" cols="20" rows="30"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-relief-outline-warning me-1 mt-2">Submit</button>
                                        <button type="reset"
                                            class="btn btn-relief-outline-primary me-1 mt-2">Reset</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
          // $("document").ready(function () {
              $(document).on('change','#main_category', function () {
                  // alert('ddd');
                  var catId = $(this).val();
                  if (catId) {
                      $.ajax({
                          url: '/show-category/' + catId,
                          type: "GET",
                          data: {
                            "catId":catId
                          },
                          dataType: "json",
                          success: function (response) {
                            if(response.status)
                            {
                            $('#sub_category').empty();
      
                              // console.log(response);
                              response.sub_categories.forEach(sub_category=>{
                                // console.log(sub_category);
                                $('#sub_category').append('<option value=" ' + sub_category['id'] + '">' + sub_category['category_name'] + '</option>');
                              })
                            }
                             
                          }
      
                      })
                  } else {
                      $('#sub_category').empty();
                  }
              });
      
      
          // });
      </script>
@endsection

@section('vendor-js')
    <script src="{{ asset('admin') }}/vendors/js/charts/apexcharts.min.js"></script>
@endsection

@section('page-js')

@endsection
@section('custom-js')

@endsection

