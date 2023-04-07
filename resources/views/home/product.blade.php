  <!-- product section -->
  <section class="product_section layout_padding">
      <div class="container">
          <div class="heading_container heading_center">
              <h2>
                  Our <span>products</span>
              </h2>
              <div>
                <form action="{{url('product-search')}}" method="get">
                    @csrf
                    <input type="text" name="search"  placeholder="Search Product " class="float-left col-md-7">
                    <input type="submit" value="Search" class="float-right" style="margin-left:5rem;margin-top:-16%;">
                </form>
              </div>
          </div>
          
          <div class="row">
              @foreach ($products as $product)
                  <div class="col-sm-6 col-md-4 col-lg-4" >
                      <div class="box">
                          <div class="option_container" >
                              <div class="options">
                                  <a href="{{ url('product-details', $product->id) }}" class="option1">
                                      Product_Details
                                  </a>
                                  <a href="{{ url('product-details', $product->id) }}" class="option1">
                                    Buy Now
                                </a>
                               
                              </div>
                          </div>
                          <div style="margin-top:10%;">
                              @if ($product->image)
                                  <img src="/admin/images/{{ $product->image }}" alt=""
                                      style="width:80%;height: 15vw;margin:auto;object-fit: cover">
                              @else
                                  <h6>image not fount</h6>
                              @endif
                          </div>
                          <div class="detail-box">
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



                          </div>
                      </div>
                  </div>
              @endforeach


          </div><br>
          <div class="row" id="linkspagenate">
              {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
          <style>
              #linkspagenate {
                  margin-left: 30rem;
              }

              @media screen and (max-width: 250px) {
                  #linkspagenate {
                      margin-left: 0rem;
                  }
              }
          </style>
          <div class="btn-box">
              <a href="">
                  View All products
              </a>
          </div>
      </div>
  </section>
  <!-- end product section -->
