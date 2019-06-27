< @extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
	<div class="container">
		<div class="box" style="margin-top: 30px;">
			<p class="title">ALL PROJECTS</p>
	@foreach ($posts as $post)
			<div class="box" style="margin-top: 30px;">

		<li class="subtitle"><a href="/posts/{{$post->id}}">{{$post->title}} </a></li>
			</div>

	@endforeach
	</div>
</div>
</body>
</html>
@endsection 



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Enroot Mumbai</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="Enroot mumbai, em, mumbai, Enroot, problem, solutions, enrt mmbai, mumbai solution, blog, blog, Enroot blogs, engineer blogs, social blogs">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">

    <!-- ======= Bootstrap CSS ======= -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"> 

    <!-- ======= Font Awesome CSS ======= -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <!-- ======= Owl Carousel CSS ======= -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">

    <!-- ======= Magnific Popup CSS ======= -->
	
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.min.css') }}">

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

</head>

<body>

    <!-- Preloader Begin -->
    <div class='preloader w-100 h-100 position-fixed'>
        <div class="loader">
            <img class="icon" src="assets/img/preloader.png" alt="">
        </div>
    </div> 
    <!-- Preloader End -->

    <!-- Header Begin -->
    <header class="header fixed-top">
        <!-- Header Style One Begin -->
        <div class="fixed-top header-main style--one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-8">
                        <!-- Logo Begin -->
                        <div class="logo">
                            <a href="index.html">
                                <img class="default-logo" src="{{ URL::asset('img/logo.png') }}" data-rjs="2" alt="">
                                <img class="sticky-logo" src="{{ URL::asset('img/sticky_logo.png') }}" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- Logo End -->
                    </div>

                    <div class="col-lg-9 col-sm-8 col-4">
                        <!-- Main Menu Begin -->
                        <div class="main-menu d-flex align-items-center justify-content-end">
                            <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="service.html">Services</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="service.html">service v1</a></li>
                                        <li><a href="service-two.html">service v2</a></li>
                                        <li><a href="service-details.html">service details</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="projects.html">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="projects.html">Events Details</a></li>
                                        <li><a href="project-details.html">project details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">Team</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
 -->                                </li>
                                <li class="current-menu-parent menu-item-has-children">
                                    <a href="blog.html">Blog</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-single-column.html">Blog Single Colunm</a></li>
                                        <li><a href="blog-two-column.html">Blog two Colunm</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog with Sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <!-- Offcanvas Holder Trigger -->
                            <span class="offcanvas-trigger text-right d-none d-lg-block">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <!-- Offcanvas Trigger End -->
                        </div>
                        <!-- Main Menu ENd -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Style One End -->
    </header>
    <!-- Header End -->

    
    <!-- Page Title Begin -->
    <section class="page-title-bg pt-250 pb-100" data-bg-img="{{ URL::asset('img/section-pattern/page-title.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Blog</h2>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Blog Begin -->
	@foreach ($posts as $post)
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Single Blog Item Begin -->
                    <div class="single-blog-item position-relative">
                        <!-- Blog Bg Shape -->
                        <div class="date-bg-shape position-absolute">
                            <img src="{{ URL::asset('img/shapes/blog-date-shape.svg') }}" class="svg" alt="">
                        </div>
                        <!-- End Blog Bg Shape -->
                    
                        <!-- Blog Content Begin -->
                        <div class="blog-content">
                            <p class="posted-on">18 Feb</p>
                            <p class="category">{{$post->title}}</p>
                    
                            <h3 class="blog-title">{{$post->description}}</h3>
                    
                            <p class="blog-excerpt"></p>
                        </div>
                        <!-- Blog Content End -->
						
                    
                        <!-- Blog Hover Begin -->
                        <div class="blog-hover text-center text-white position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-overlay"
                            data-bg-img="assets/img/blog/blog-1.jpg">
                            <h3 class="blog-title"><a href="#">{{$post->title}}</a></h3>
                        </div>
						@endforeach
                        <!-- Blog Hover End -->
                    
                        <!-- Blog Button Begin -->
                        <div class="blog-button position-absolute w-100 d-flex align-items-center justify-content-center" data-bg-img="">
                            <img src="{{ URL::asset('img/shapes/blog-shape.svg') }}" class="svg" alt="">
                            <a href="{{ url('posts.show')}}" class="btn-inline">Read More</a>
                        </div>
                        <!-- Blog Button End -->
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                
               
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Footer Begin -->
    <footer class="footer bg-light section-pattern footer-bg" id="appointmentModalForm"
        data-bg-img="assets/img/section-pattern/footer-pattern.png">
        <!-- Footer Top Begin -->
        <div class="footer-top pt-60">
            <div class="container border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Contact Widget Begin -->
                        <div class="widget widget_contact_info">
                            <!-- Widget Logo Begin -->
                            <div class="widget-logo">
                                <img src="assets/img/footer_logo.png" data-rjs="2" alt="">
                            </div>
                            <!-- Widget Logo End -->

                            <!-- Widget Content Begin -->
                            <div class="info-content">
                                <!-- <div class="single-info">
                                    <span>Office Location</span>
                                    <p>173 Collins Street West victoria, Melbourne, Australia</p>
                                </div> -->
                                <div class="single-info">
                                    <span>Phone</span>
                                   <p><a href="tel:+91 70214 85889">+91 70214 85889</a></p>
                                </div>
                                <div class="single-info">
                                    <span>Support mail</span>
                                    <p>
                                        <a href="mailto:contact@enrootmumbai.in?Subject=Enroot%20Help" target="_top">contact@enrootmumbai.in</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Widget Content End -->
                        </div>
                        <!-- About Widget End -->
                    </div>
                    
                    <div class="col-lg-4 col-sm-6">
                        <!-- Widget Quick Nav -->
                        <div class="widget widget_nav_menu">
                            <!-- Widget Title Begin  -->
                            <div class="widget-title">
                                <h4>Quick Links</h4>
                            </div>
                            <!-- Widget Title End  -->

                            <!-- Menu Begin -->
                            <ul class="menu">
                                <li><a href="service.html">Services</a></li>
                                <li><a href="projects.html">Events</a></li>
                                <li><a href="about.html">Team</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <!-- Menu End -->
                        </div>
                        <!-- Widget Quick Nav -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Widget Newsletter Begin -->
                        <div class="widget widget_newsletter">
                            <!-- Widget Title Begin  -->
                            <div class="widget-title">
                                <h4>Newsletter</h4>
                            </div>
                            <!-- Widget Title End  -->

                            <div class="newsletter-content">
                                <P>Cuteness you exquisite ourselves now end
                                    forfeited. Enquire ye without it garrets himself. Interest our nor received followed
                                    was.</P>

                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" class="newsletter-form">
								@csrf
                                    <div class="theme-input-group">
                                        <input type="text" placeholder="Your Email">
                                        <button type="submit"><i class="fa fa-paper-plane-o"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Widget Newsletter End -->

                        <!-- Widget Social Icon Begin -->
                        <div class="widget widget_social_icon">
                            <ul class="social_icon_list list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Social Icon End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Begin -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <span><a href="#">Enroot Mumbai</a> &copy; Copyright 2018.All rights reserved.</span>
                            <span style="display: block;">Made with ♥ in Mumbai for Mumbai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End --> 

    </footer>
    <!-- Footer End -->

    <!-- Back to Top Begin -->
    <a href="#" class="back-to-top position-fixed">
        <div class="back-toop-tooltip"><span>Back To Top</span></div>
        <div class="top-arrow"></div>
        <div class="top-line"></div>
    </a>
    <!-- Back to Top End -->

    <!-- ======= jQuery Library ======= -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    
    <!-- ======= Bootstrap Bundle JS ======= -->
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- =======  Mobile Menu JS ======= -->
    <script src="{{ URL::asset('js/menu.min.js') }}"></script>
    
    <!-- ======= Waypoints JS ======= -->
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    
    <!-- ======= Counter Up JS ======= -->
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
    
    <!-- ======= Owl Carousel JS ======= -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    
    <!-- ======= Isotope JS ====== -->
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>
    
    <!-- ======= Magnific Popup JS ======= -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- ======= Countdown JS ======= -->
    <script src="{{ URL::asset('js/countdown.min.js') }}"></script>
    
    <!-- ======= Retina JS ======= -->
    <script src="{{ URL::asset('js/retina.min.js') }}"></script>
	
    
    <!-- ======= Google API ======= -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    
    <!-- ======= Main JS ======= -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    
    <!-- ======= Custom JS ======= -->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
</body>

</html>