@extends('home.layouts.main')
@section('content')
    <!-- slider section -->
    <section class="slider_section ">
        <div class="slider_bg_box">
            <img src="{{ asset('home/images/slider-bg.jpg') }}" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                        Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                        architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                        Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                        architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                        Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                        architecto veritatis delectus repellat modi impedit sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    </div>
    <!-- why section -->
    @include('home.whysection')
    <!-- end why section -->

    <!-- arrival section -->
    @include('home.arrivalsection')
    <!-- end arrival section -->

    <!-- product section -->
    @include('home.product')
    <!-- end product section -->

    <!-- subscribe section -->
    @include('home.subscribesection')
    <!-- end subscribe section -->
    <!-- client section -->
    @include('home.clientsection')
    <!-- end client section -->
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
