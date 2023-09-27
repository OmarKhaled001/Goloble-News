@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')       
    <div id="content" class="container mt-10" >
        <div  class="row titleSection mt-10 ">
            <h2>statistics</h2>
        </div>
        <div id="features" class="row mb-20">           
                <div class="card col-lg-4  g-5 shadow rounded text-center d-flex justify-content-center align-items-center">
                    <div class="icon"><i class="fa-solid fa-user fa-2xl" ></i></div>				
                    <h2 class="title"><a href="{{url("cpanel/editor/all")}}">Editor</a></h2>
                    <h2 class="title fw-bold text-Success">{{$noOfEditors}} @if($noOfEditors>0)<i class="fa-solid fa-arrow-up"></i>@endif</h2>
                </div>
                <div class="card shadow rounded col-lg-4 g-5 text-center d-flex justify-content-center align-items-center">
                    <div class="icon"><i class="fa-solid fa-lines-leaning fa-2xl"></i></div>				
                    <h2 class="title"><a href="{{url("cpanel/category/all")}}">Category</a></h2>
                    <h2 class="title fw-bold text-Success">{{$noOfCategories}} @if($noOfCategories>0)<i class="fa-solid fa-arrow-up"></i>@endif</i></h2>
                </div>
                <div class="card shadow rounded col-lg-4 g-5 text-center d-flex justify-content-center align-items-center">
                    <div class="icon"><i class="fa-solid fa-newspaper fa-2xl"></i></div>				
                    <h2 class="title"><a href="{{url("cpanel/news/all")}}">News</a></h2>
                    <h2 class="title fw-bold text-Success">{{$noOfNews}}  @if($noOfNews>0)<i class="fa-solid fa-arrow-up"></i>@endif</i></h2>
                </div>
        </div>
    </div>
@endsection