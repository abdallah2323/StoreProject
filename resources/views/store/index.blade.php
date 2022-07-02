<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css')}}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/store" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/store" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/items">Products</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Categories</a>
                                <ul>
                                    @foreach ($categs as $categ)
                                    <li><a href="/category/show/{{$categ->id}}">{{$categ->Category_Name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/items">Products</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Hexashop</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                <div class="main-border-button">
                                    <a href="/items">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/left-banner-image.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Hexashop</h4>
                                <span>Awesome, clean &amp; creative HTML5 Template</span>
                                <div class="main-border-button">
                                    <a href="/items">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/baner-right-image-02.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Categories</h2>
                        <span>Best Categories</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                                @foreach ($categs as $categ)
                                {{-- @if ($product->Category == $categ->Product_Type) --}}
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="/category/show/{{$categ->id}}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('uploads/categories/' . $categ->Category_Image) }}" width="350" height="235"  alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$categ->Category_Name}}</h4>
                                        <span>{{$categ->Category_Description}}</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            {{-- @endif --}}
                            @endforeach              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>Best Services</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                                @foreach ($services as $service)
                                {{-- @if ($product->Category == $categ->Product_Type) --}}
                                <div class="item">
                                    <div class="thumb">

                                        <img src="{{ asset('uploads/services/' . $service->Service_image) }}" width="350" height="235"  alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$service->Service_name}}</h4>
                                        <span>{{$service->Service_detail}}</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            {{-- @endif --}}
                            @endforeach              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <span>Top Members</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                                @foreach ($members as $member)
                                {{-- @if ($product->Category == $categ->Product_Type) --}}
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{$member->member_facebook}}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="{{$member->member_twitter}}"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="{{$member->member_instagram}}"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('uploads/members/' . $member->member_image) }}" width="350" height="235"  alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$member->member_name}}</h4>
                                        <h4>{{$member->team_name}} Team</h4>
                                        <span>{{$member->member_detail}}</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            {{-- @endif --}}
                            @endforeach              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            @foreach ($abouts as $about)
                            <li><a href="#">{{$about->Address}}</a></li>
                            <li><a href="#">{{$about->Gmail}}</a></li>
                            <li><a href="#">{{$about->Whatsapp}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <ul>
                            @foreach ($categs as $categ)
                            <li><a href="/category/show/{{$categ->id}}">{{$categ->Category_Name}}</a></li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Homepage</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>   
                            @foreach ($abouts as $about)
                            <li><a href="{{$about->Facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$about->Twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$about->Instagram}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$about->Linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/accordions.js')}}"></script>
    <script src="{{ asset('assets/js/datepicker.js')}}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js')}}"></script> 
    <script src="{{ asset('assets/js/slick.js')}}"></script> 
    <script src="{{ asset('assets/js/lightbox.js')}}"></script> 
    <script src="{{ asset('assets/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>