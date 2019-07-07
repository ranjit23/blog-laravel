


<head>
	<title></title>
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

@extends('layouts.app')

@section('content')



	
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
                            <p class="posted-on">{{$post->created_at}}</p>
                            <p class="category">{{$post->title}}</p>
                    
                            <h3 class="blog-title">{{$post->description}}</h3>
                    
                            <p class="blog-excerpt"></p>
                        </div>
                        <!-- Blog Content End -->
                        <a href="/posts/{{$post->id}}/edit" class="btn-inline">Edit Post</a>

                        </section>
<hr>
<div class="container">
<div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                            <br>
                          
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>
        

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>

               
            </div>
        </div>
    </div>
    
    <!-- Back to Top Begin -->
    <a href="#" class="back-to-top position-fixed">
        <div class="back-toop-tooltip"><span>Back To Top</span></div>
        <div class="top-arrow"></div>
        <div class="top-line"></div>
    </a>
    <!-- Back to Top End -->
</div>
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
    @endsection
</body>