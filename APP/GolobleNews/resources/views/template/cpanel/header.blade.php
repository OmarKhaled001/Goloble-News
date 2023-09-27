<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="styleSheet" type="text/css" href="{{asset("assets/cpanel/css/bootstrap.min.css")}}" />
    <link rel="styleSheet" type="text/css" href="{{asset("assets/cpanel/css/base.css")}}" />
    <title>@yield('pageTitle')</title>
</head>
<body>
    <div class="wrapper">
        <div id="navbar" class="navbar navbar-expand-xl shadow align-middle" >
            <div class="container">            
                <a id="logo" class="navbar-brand col" href="{{url("dashbord/golobleNews")}}">GN_Dashboard</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 col d-flex justify-content-end align-items-center">
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/editor/create")}}">Add Editor</a>
                        </li>
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/editor/all")}}">Edit Editor</a>
                        </li>
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/category/create")}}">Add Category</a>
                        </li>
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/category/all")}}">Edit Category</a>
                        </li>
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/news/create")}}">Add News</a>
                        </li>
                        <li class="nav-item align-items-start">
                            <a class="nav-link fw-bold" href="{{url("cpanel/news/all")}}">Edit News</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{url("logout")}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-danger" name="clickhere" value="Logout"/>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>       
        </div>       