@extends('home.layouts.main')
@section('content')

    <!-- product section -->
      <section class="product_section layout_padding">
      <div class="container">
          <div class="heading_container heading_center">
              <h2>
                  Our <span>products</span>
              </h2>
              <div>
                <form action="{{url('search-product')}}" method="get">
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

    {{-- Comment and replay system  --}}
    <div class="comtainer">
        <div class="row">
            {{-- @dd($comments) --}}
            <div class="col-md-6 m-auto ">
                <form action="{{ url('add-comment') }}" method="POST">
                    @csrf
                    <h1 style="margin-left:18rem;padding:15px; font-size:20px ;"><b> Comments</b></h1>
                    <textarea name="comment" id="" cols="30" rows="10" required></textarea>

                    <input class="btn btn-primary float-right" style="margin-top: -10px;margin-bottom:10rem" value="comment"
                        type="submit">
                </form>


                <div class="" style="width:650px;hieght:500px;margin-top:%; "><br>
                    <h3 style="font-size:30px">All Comments :</h3><br>
                    @foreach ($comments as $item)
                        <br><br><b style="font-size:25px">{{ $item->name }}</b>
                        <p style="margin-left: 2rem;">{{ $item->comment }}</p><br>
                        <a href="javascript::void(0);" style="color:rgb(44, 42, 155) ; font-size:20px" onclick="reply(this)"
                            data-Commentid="{{ $item->id }}">Reply</a>
                    
                    @foreach ($replys as $reply)
                     @if ($reply->comment_id == $item->id)
                         
                     
                    <div style="margin-left:5rem;">                        

                            <b style="font-size:25px">{{$reply->name}}</b>

                            <p style="margin-left: 2rem;">{{$reply->reply}}</p><br>

                            <a href="javascript::void(0);" style="color:rgb(44, 42, 155) ; font-size:20px" onclick="reply(this)"
                            data-Commentid="{{ $item->id }}">Reply</a>

                    </div>
                    @endif
                    @endforeach

                    @endforeach

                    {{-- Reply textbox --}}
                    {{-- @dd($replys) --}}
                    <div style="display:none;" class="replyDiv">

                        <form action="{{ url('add-reply') }}" method="POST">
                            @csrf
                            <input type="text" id="commentId" name="commentId" hidden>

                            <textarea name="reply" id="" style="height:0px;width:300px;"></textarea><br>

                            <input type="submit" value="reply" class="btn btn-success float-left"
                                style="margin-top:-1rem;">

                            <a href="javascript::void(0)" class="btn float-right" onclick="reply_close(this)"
                                style="margin-right: 25rem;margin-top:-1rem;">Close</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function reply(caller) {

                document.getElementById('commentId').value = $(caller).attr('data-Commentid');

                $('.replyDiv').insertAfter($(caller));

                $('.replyDiv').show();


            }

            function reply_close(caller) {
                $('.replyDiv').hide();
            }
        </script>
        <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
             var scrollpos = localStorage.getItem('scrollpos');
             if (scrollpos) window.scrollTo(0, scrollpos);
         });
 
         window.onbeforeunload = function(e) {
             localStorage.setItem('scrollpos', window.scrollY);
         };
     </script>
        {{-- End comment and Replay system --}}
    @endsection
