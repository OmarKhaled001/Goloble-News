@extends('template.front.admin')
@section('content')
            @if($allNews)
            <div class="container">
                <!-- start Section Title -->
                <div class="section-title">
                    <h1>Last News</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi fugit esse aut natus quam ipsam officia,
                    blanditiis velit ab culpa? Illo molestiae reiciendis amet ullam.</p>
                </div>
                <!-- End Section Title -->
                <!-- start News -->
                <div class="row">
                    @foreach($allNews as $news)
                    <div id="box" class="card  col-lg-3 col-md-4 col-sm-6 w-xs-75 h-xs-75 border-0 shadow ">
                        <a  href="{{url("news/$news->id/show")}}" class="position-relative image"><img src="{{asset("upload/$news->main_image")}}" class="card-img-top w-100 h-100 " alt="..."></a>
                            <div class="card-body">
                            <h1 class="card-title">{{$news->title}}</h1>
                            <p class="card-text">{{$news->category->name}}</p>
                            <a href="{{url("news/$news->id/show")}}" class="btn text-center ">learn more</a>
                            </div>
                    </div> 
                    @endforeach   
                </div>
            </div>
            <!--  end news -->
            
            <!--  start Page navigation -->
            <nav  class="my-5"aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{$allNews->links()}}
                </ul>
            </nav>
          <!--    end Page navigation -->
            @endif
@endsection