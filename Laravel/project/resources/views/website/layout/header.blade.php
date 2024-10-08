<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Inance</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('website/css/bootstrap.css')}}" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="{{ url('website/css/font-awesome.min.css')}}" />

  <!-- Custom styles for this template -->
  <link href="{{ url('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('website/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
  $url = end($url_array);  
  if($currect_page == $url){
	  echo 'active'; //class name in css 
  } 
}
?>
  @include('sweetalert::alert');
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            @if(session()->has('ses_userid'))
            <a href="">
              <i class="fa fa-USER" aria-hidden="true"></i>
              <span>
               Hi .. {{session()->get('ses_username')}}
              </span>
            </a>
            @endif
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Inance
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item <?php active('')?>">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php active('about')?>">
                  <a class="nav-link" href="{{url('/about')}}"> About</a>
                </li>
                <li class="nav-item <?php active('service')?>">
                  <a class="nav-link" href="{{url('/service')}}">Services</a>
                </li>
                <li class="nav-item <?php active('contact')?>">
                  <a class="nav-link" href="contact">Contact Us</a>
                </li>
                @if(session()->has('ses_userid'))
                <li class="nav-item">
                  <a class="nav-link" href="user_logout">Logout</a>
                </li>
                @else
                <li class="nav-item <?php active('signup')?>">
                  <a class="nav-link" href="signup">Signup</a>
                </li>
                @endif
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->