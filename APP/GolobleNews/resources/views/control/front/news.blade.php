@extends('template.front.admin')
@section('content')
        @if($news)
            <!--  start content -->
            <div id="content" class="container">
                <!-- start Section Title -->
                <div class="section-title text-center">
                    <h1 id="1">{{$news->title}}</h1>
                </div>
                <!-- End Section Title -->
                <div id="news" class="row g-3">
                    <div id="imgNews" class="col-lg-6 col-sm-12"><img src="{{asset("upload/$news->main_image")}}" alt="" class="w-100 h-100"></div>
                    <p  class="col-lg-6 col-sm-12 mt-3 "> {{$news->content}} </p>
                </div>
            @endif
                <!-- start Section Title -->
                <div class="section-title">
                    <h1>Last News</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi fugit esse aut natus quam ipsam officia,
                    blanditiis velit ab culpa? Illo molestiae reiciendis amet ullam. Minus corporis ducimus officia beatae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dignissimos unde aut. 
                    Sequi quo tenetur delectus accusamus saepe adipisci,
                    quam ducimus veniam eveniet reiciendis quod earum eligendi recusandae consectetur corporis?</p>
                </div>
                <!-- End Section Title -->
                <!--  start owl carousel -->
                <div id="last" class="row mt-10 g-5">
                    <div class="owl-carousel owl-theme">
                        @if(count($allNews)>0)
                        @foreach($allNews as $news)
                        <div class="item"  width="250px" height="400px">
                            <div class="card  border-0 shadow ">
                                <a href="{{url("news/$news->id/show")}}" class="position-relative"><img src="{{asset("upload/$news->main_image")}}" class="card-img-top w-100 h-100 " alt="...">
                                    <span class="position-absolute top-0 start-10 translate-start badge rounded-pill bg-danger  text-center animate__animated animate__pulse animate__infinite">
                                    NEW
                                    <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                                <div class="card-body">
                                    <h1 class="card-title">{{$news->title}}</h1>
                                    <p class="card-text">{{$news->category->name}}</p>
                                    <a href="{{url("news/$news->id/show")}}" class="btn text-center ">learn more</a>
                                </div>
                            </div>        
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <!-- end  owl carousel -->
            </div>
            <!--  end content -->
@endsection