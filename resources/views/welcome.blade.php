<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

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
                                <li class="current-menu-parent menu-item-has-children">
                                    <a href="index.html">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children" >
                                    <a href="services.html" >Services</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
 -->                                </li>
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
                                <li class=" menu-item-has-children">
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
                                <ul class="navbar-nav ml-auto">
                         <!-- Authentication Links -->
                        @guest
                        <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                            
                            @if (Route::has('register'))
                            <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                                
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest 
                    </ul>
                            </ul>
                            <!-- Offcanvas Holder Trigger -->
                                <span></span>
                                <span></span>
                                <span></span>
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
    <div class='preloader w-100 h-100 position-fixed'>
        <div class="loader">
            <img class="icon" src="assets/img/preloader.png" alt="">
        </div>
    </div>
    <!-- Preloader End -->


    
   
                
  
            

    <!-- Banner Begin -->
    <section class="banner bg-overlay" data-bg-img="{{ URL::asset('img/banner/banner-bg.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Banner Content Begin -->
                    <div class="banner-content text-white text-center">
                        <h1>We design solutions
                            for development
                            of Mumbai</h1>
                        <p>Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it. Farther be chapter at
                        visited married in it pressed. By distrusts procuring be oh frankness .</p>
                        <a href="contact.html" class="banner-btn btn btn-white"><span>Get In Touch</span></a>
                    </div>
                    <!-- Banner Content End -->
                </div>
            </div>
        </div>
        <img src="assets/img/shapes/slider-shape.svg" class="svg wave-shape" alt="">
    </section>
    <!-- Banner End -->

    <!-- Modal Form Begin -->
    <div class="appointment-modal modal fade"  tabindex="1" role="dialog"
        aria-labelledby="appointmentModalForm" aria-hidden="true">
        <div class="modal-dialog d-flex align-items-center" role="document">
            <div class="container">
                <div class=" row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <!-- Modal Content Begin -->
                        <div class="modal-content">
                            <!-- Modal Close Button Begin -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/img/icons/close.svg" alt="">
                            </button>
                            <!-- End Modal Close End -->

                            <!-- Appointment Form Begin -->
                            <form action="#" method="POST" class="appointment-form">
                                <h2 class="form-title">Request Appoinment</h2>
                                <input class="theme-input-style" type="text" placeholder="Full Name">
                                <input class="theme-input-style" type="email" placeholder="Email">
                                <input class="theme-input-style" type="tel" placeholder="Phone">

                                <select class="theme-input-style clearfix">
                                    <option value="" disabled="" selected="">Select purpose</option>
                                    <option value="01">Business</option>
                                    <option value="01">Consultancy</option>
                                </select>

                                <textarea class="theme-input-style" placeholder="Message"></textarea>

                                <button class="btn" type="submit"><span>Send request</span></button>
                            </form>
                            <!-- End Appointment Form End -->
                        </div>
                        <!-- Modal Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Form End -->

    <!-- Feature Begin -->
    <section class="pb-90 feature-style-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 single-feature-wrapper">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                        <div class="image">
                            <img src="assets/img/feature/feature-1.png" data-rjs="2" alt="">
                        </div>
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3>Health | Safety</h3>
                            <p>Solving problems in the field of Health and safety will help us live Safe and Quality life in our City.</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-3 col-md-6 single-feature-wrapper">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                        <div class="image">
                            <img src="assets/img/feature/feature-2.png" data-rjs="2" alt="">
                        </div>
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3>Mobility</h3>
                            <p>Whether we are travelling to go to Work, College, or just a picnic we all face problems in reaching our destinations.</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-3 col-md-6 single-feature-wrapper">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                        <div class="image">
                            <img src="assets/img/feature/feature-3.png" data-rjs="2" alt="">
                        </div>
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3>Environment</h3>
                            <p>Mumbai is now a forest, but made of concrete, bricks and cement instead of trees and plants.</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-3 col-md-8 single-feature-wrapper">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                        <div class="image">
                            <img src="assets/img/feature/feature-1.png" data-rjs="2" alt="">
                        </div>
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3>Employment</h3>
                            <p>Each and every individual has a purpose to fulfill, its all about giving them the right opportunity to work.</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <!-- About Begin -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>About Agency</h3>
                        <h2>We’re Expertise & Strategic Agency <br>
                        To Take Care Of Your Business</h2>
                        <p>Met defective are allowance two perceived listening consulted contained. It chicken oh colonel pressed
                        excited suppose to shortly.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Video Area Begin -->
                    <div class="video-area style--two bg-overlay mb-50 mb-lg-0">
                        <img src="assets/img/about-video.jpg" data-rjs="2" alt="">
                        <a href="https://www.youtube.com/watch?v=ctvlUvN6wSE" class="vdo-btn-two popup-video">
                            <img src="assets/img/icons/video-play.svg" class="svg" alt="">
                        </a>
                    </div>
                    <!-- Video Area End -->
                    
                </div>
                <div class="col-lg-6">
                    <!-- About Tabs Begin -->
                    <div class="about-nav-tab">
                        <!-- Nav Tabs Begin -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-items">
                                <a class="nav-link active" data-toggle="tab" href="#mission" role="tab"
                                    aria-selected="true">Our Mission</a>
                            </li>
                            <li class="nav-items">
                                <a class="nav-link" data-toggle="tab" href="#vission" role="tab"
                                    aria-selected="false">Our Vission</a>
                            </li>
                        </ul>
                        <!-- Nav Tabs End -->

                        <!-- Tab Contents Begin -->
                        <div class="tab-content">
                            <!-- Mission Tab Begin -->
                            <div class="tab-pane fade show active" id="mission" role="tabpanel">
                               

                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> To improve the Quality of life of all the citizens of the city.</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> To ensure ecological and sustainable development of the city.</li>   
                                    <li><i class="fa fa-check" aria-hidden="true"></i> To find problems faced by the common citizens in their daily life and tackle them</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> To encourage and harness young talent to form a community based approach.</li>
                                </ul>

                            </div>
                            <!-- Mission Tab End -->

                            <!-- Vission Tab Begin -->
                            <div class="tab-pane fade" id="vission" role="tabpanel">
                                <p>To solve problems and inculcate an attitude of problem solving and development amongst the citizens of Mumbai with collaborative support of each other.</p>
                            </div>
                            <!-- Vission Tab End -->
                        </div>
                        <!-- Tab Contents End -->
                    </div>
                    <!-- About Tabs End -->
                </div>
                
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Counter Begin -->
    <section class="pt-120 pb-70 gradient-bg">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>1</span></h2>
                        <p>Years of experience</p>
                    </div>
                </div>
                <!-- End Single Counter -->

                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>200</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- End Single Counter -->

                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>5</span>+</h2>
                        <p>Project Done</p>
                    </div>
                </div>
                <!-- End Single Counter -->

                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>3</span>+</h2>
                        <p>Giving Consultancy</p>
                    </div>
                </div>
                <!-- End Single Counter -->
            </div>
        </div>
    </section>
    <!-- Counter End -->

    <!-- Service Begin -->
    <section class="pt-120 pb-70 section-pattern" data-bg-img="assets/img/section-pattern/work-process-pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>Steps</h3>
                        <h2>Work Process Our Experts Do</h2>
                        <p>Delivered dejection necessary objection do mr prevailed. Mr feeling do chiefly cordial in do.
                            Water timed folly right
                            aware if oh truth. Imprudence attachment him his for sympathize.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row process-bg" data-bg-img="{{ URL::asset('img/process_shape.png') }}">
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{ URL::asset('img/process/process-1.png') }}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Ideate</h3>
                            <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Identify the problem</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Research</li>   
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Think of a solution</li>
                                  
                                </ul>
                           
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{ URL::asset('img/process/process-2.png') }}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Prototype</h3>
                            <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Wireframing</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Designing</li>   
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Feedback</li>
                                  
                                </ul>
                            
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{ URL::asset('img/process/process-3.png') }}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Build</h3>
                            <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Update the design</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Build the model</li>   
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Test the model</li>
                                  
                                </ul>
                           
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{ URL::asset('img/process/process-4.png') }}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Deploy</h3>
                            <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i>Launch</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Reach the audience</li>   
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Update and Improvise</li>
                                  
                                </ul>
                           
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process End -->



    

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
                            
                            <!-- Widget Logo End -->

                            <!-- Widget Content Begin -->
                            <div class="info-content">
                                <!-- <div class="single-info">
                                    <span>Office Location</span>
                                    <p>173 Collins Street West victoria, Melbourne, Australia</p>
                                </div> -->
                                <div class="widget-title">
                                <h4>Contact Us</h4>
                            </div>
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
                                <h4>Social Media</h4>
                            </div>
                            <!-- Widget Title End  -->

                           
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
                            <span><a href="#">Enroot Mumbai</a> &copy; Copyright 2019.All rights reserved.</span>
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
