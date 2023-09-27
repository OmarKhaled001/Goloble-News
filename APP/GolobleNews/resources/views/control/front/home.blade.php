@extends('template.front.admin')
@section('content')
            <!--  start slidewhow -->
            <div id="slideShow"  >
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="500">
                            <img src="{{asset("assets/front/images/4.jpg")}}" class="d-block w-100 h-100" alt="news.image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="{{asset("assets/front/images/2.jpg")}}" class="d-block w-100 h-100" alt="news.image">
                        </div>
                        <div class="carousel-item" data-bs-interval="1500">
                            <img src="{{asset("assets/front/images/1.jpg")}}" class="d-block w-100 h-100 " alt="news.image">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{asset("assets/front/images/3.jpg")}}" class="d-block w-100 h-100" alt="news.image">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!--  end slidewhow -->
            <!--  start content -->
            <div id="content" class="container" >
                <!-- start About us Title -->
                <!-- start Section Title -->
                <div class="section-title">
                    <h1 id="1">About Us</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi fugit esse aut natus quam ipsam officia,
                    blanditiis velit ab culpa? Illo molestiae reiciendis amet ullam. Minus corporis ducimus officia beatae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dignissimos unde aut. 
                    Sequi quo tenetur delectus accusamus saepe adipisci,
                    quam ducimus veniam eveniet reiciendis quod earum eligendi recusandae consectetur corporis?</p>
                </div>
                <!-- End Section Title -->
                <div id="about" class="row ">
                    <div class="col-lg-6 col-sm-12 ">
                        <img src="{{asset("assets/front/images/image-about.png")}}" alt="" class="w-100 h-100">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">Who?</a></li>
                                <li><a href="#tabs-2">When?</a></li>
                                <li><a href="#tabs-3">how?</a></li>
                            </ul>
                            <div id="tabs-1">
                                <p><strong>again to close the content pane.</strong></p>
                                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                            </div>
                            <div id="tabs-2">
                                <p><strong>Click tclose the content pane.</strong></p>
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque conval.</p>
                            </div>
                            <div id="tabs-3">
                                <p><strong>this tab again to close the content pane.</strong></p>
                                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. lectus hendrerit hendrerit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start Section Title -->
                @if(count($allNews)>0)
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
                <!--  start contact us -->
                <div id="contact" class="container">
                    <!-- start Section Title -->
                    <div class="section-title">
                        <h1 id="3">Contact Us</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi fugit esse aut natus quam ipsam officia,
                        blanditiis velit ab culpa? Illo molestiae reiciendis amet ullam. Minus corporis ducimus officia beatae?</p>
                    </div>
                    <div class="contact__wrapper  mt-n9">
                        <div class="row no-gutters">
                            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2 shadow">
                                <h3 class="color--white mb-5">Omar Khaled</h3>
                                <ul class="contact-info__list list-style--none position-relative">
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fas fa-envelope"></i></span> support@bootdey.com
                                    </li>
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fas fa-phone"></i></span> (+20) 1068778340
                                    </li>
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> bootdey Technologies Inc.
                                        <br> 2694 Queen City Rainbow Drive
                                        <br> Florida 99161
                                        <div class="mt-3">
                                            <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon text-white">Get directions <i class="link__icon fa fa-directions"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1 shadow">
                                <form action="#" class="contact-form form-validate" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label class="required-field mb-2 " for="firstName">First Name</label>
                                                <input type="text" class="form-control " id="firstName" name="firstName" placeholder="Wendy">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label class="mb-2" for="lastName">Last Name</label>
                                                <input type="text" class="form-control " id="lastName" name="lastName" placeholder="Appleseed">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label class="required-field mb-2 " for="email">Email</label>
                                                <input type="text" class="form-control " id="email" name="email" placeholder="wendy.apple@seed.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label class="mb-2 " for="phone">Phone Number</label>
                                                <input type="tel" class="form-control " id="phone" name="phone" placeholder="(021)-454-545">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label class="required-field mb-2 " for="message">How can we help?</label>
                                                <textarea class="form-control " id="message" name="message" rows="4" placeholder="Hi there, I would like to....."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <button type="submit" name="submit" class="btn form-control shadow ">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Contact Form Wrapper -->
                    
                        </div>
                    </div>
                </div>
                <!--  end contact us -->
            </div>
            <!--  end content -->
@endsection
