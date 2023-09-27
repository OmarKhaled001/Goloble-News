<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="styleSheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="styleSheet" type="text/css" href="{{asset("assets/front/css/owl.carousel.min.css")}}" />
        <link rel="styleSheet" type="text/css" href="{{asset("assets/front/css/owl.theme.default.min.css")}}" />
        <link rel="styleSheet" type="text/css" href="{{asset("assets/front/css/jquery-ui.min.css")}}" />
        <link rel="styleSheet" type="text/css" href="{{asset("assets/front/css/bootstrap.min.css")}}" />
        <link rel="styleSheet" type="text/css" href="{{asset("assets/front/css/base.css")}}" />
        <title>Golobel News</title>
    </head>
    <body>
        <div id="wrapper" class="container-fluid">
            <!--start header.(logo - navbar)-->
            <div id="header" class="navbar navbar-expand-lg shadow" >
                <div class="container">  
                    <div id="logo" class="animate__animated animate__pulse animate__infinite" >
                        <a href="{{url("golobleNews/home")}}"><img src="{{asset("assets/front/images/logo-color.png")}}" alt="Golobel News-logo"></a>
                    </div>          
                    <button class="navbar-toggler bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{url("golobleNews/home#1")}}">About us</a>
                            </li>
                            @if(count($allCategoriesLinks)>0)
                            @if(count($allNews)>0)
                            @foreach($allCategoriesLinks as $category)
                                <li class="nav-item"><a class="nav-link fw-bold" href="{{url("category/$category->id/show")}}">{{$category->name}}</a></li>
                            @endforeach
                            @endif 
                            @endif 
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{url("golobleNews/home#3")}}">contact us</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>