 @extends('home.layouts.main')
 @section('content')

     <!-- product section -->
     {{-- @dd($product) --}}
                 <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;width:50%;padding:30px;">
                         <div class="box">
                             
                             <div>
                                 @if ($product->image)
                                     <img src="/admin/images/{{ $product->image }}" alt=""
                                         style="width:100%;height: 15vw;margin:auto;object-fit: cover;">
                                 @else
                                     <h6>image not fount</h6>
                                 @endif
                             </div>
                             <div class="detail-box" style="padding:20px">
                                 <h5>
                                     {{ $product->category->category_name }}
                                 </h5>

                                 @if ($product->discount_price != null)
                                     <h6 style="color:red">
                                         Discount_price <br>
                                         Rs:{{ $product->discount_price }}
                                     </h6>
                                     <h6 style="text-decoration: line-through; color:blue;">
                                         Price <br>
                                         Rs: {{ $product->price }}
                                     </h6>
                                 @else
                                     <h6>
                                         Price <br>
                                         Rs: {{ $product->price }}
                                     </h6>
                                 @endif
                                 <h6>
                                   Product Category : {{ $product->category->category_name }}
                                    
                                </h6>
                                <h6>
                                  Availible Quantity :  {{ $product->quantity }}
                                </h6>
                                <h6>
                                   Product Discription : {!! $product->description !!}
                                </h6>
                                <form action="{{url('add_cart',$product->id)}}" method="post">
                                    @csrf
                                      <div class="row">
                                          <div class="col-md-4">
                                              <input type="number" name="quantity" value="1" min="1" style="width:100px">
                                          </div>
                                          <div class="col-md-4">
                                              <input type="submit" value="Add to cart" style="widht:150px">
                                          </div>
                                      </div>


                                  </form>
                             </div>
                         </div>
                     </div>
                 </div>
            
     <!-- end product section -->

     <!-- subscribe section -->
     @include('home.subscribesection')
     <!-- end subscribe section -->
     <!-- client section -->
     @include('home.clientsection')
     <!-- end client section -->
 @endsection
