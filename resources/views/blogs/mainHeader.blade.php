@extends('layouts.footer')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NeuroData</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="/assets/css/untitled.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77" style="background: linear-gradient(66deg, #064848 15%, #064848 15%, #064820 82%, #064820 99%, #064820 100%, #064820 100%), #064848;">
    <div class="background_header" style="    background: center no-repeat;
        background-image: url(/assets/img/background.png)!important;
        background-position: top right; 
        background-size: auto 90%;
        margin-right: 0px;
        padding: 0px;">
        <nav class="navbar navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a href="/blogs/neurodata">
                    <img class="shadow-lg" src="/assets/img/logos/logo.png">
                </a>


                <button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-center ms-auto insta">
                        <li class="nav-item nav-link"><a class="nav-link active" href="#about">About</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="{{ route ('contact')}}">contact</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="{{ route ('blogs.homePage')}}">News & Blogs</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#Research">Research</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#">Products</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead" style="background: center / contain no-repeat; ">
            <div style="margin-top: 170px;">
                <div class="container">
                    <div class="row d-flex flex-row flex-nowrap align-content-sm-center align-content-md-center align-content-lg-center align-content-xl-center row-d" style="margin-top: -126px;width: 100%;">
                        <div class="col-12 col-lg-8 m-auto cold" style="margin-bottom: 11px;">
                            <h1 class="display-1 wobble animated brand-heading"><br><br>Your trusted
                                partner
                                for AI solutions<br><br><br></h1>

                            <button class="fill header"><a href="{{ route ('contact')}}">Contact us</a></button>


                        </div>
                        <div class="col d-flex flex-column align-items-end align-self-center mx-auto"><img class="img-fluid d-block flex-column justify-content-center align-items-center align-content-center flex-nowrap mediates" loading="lazy" style="/*margin-top: 116px;*/"></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 30px;"><a href="#services"><button class="btn btn-primary border rounded-circle d-block mx-auto bounce animated infinite" type="button" style="background: transparent;width: 44px;height: 44px;"><i class="fa fa-angle-double-down d-block align-items-center align-content-center mx-auto" style="color: #fff;font-size: 20px;text-align: center;height: 26px;width: 18px;"></i></button>
                            </a></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- SVG  SVG -->
        <div style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">

                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #D9EEEC;">

                </path>
            </svg>
        </div>
    </div>


    <!--Waves Container-->
    @yield('body')
    @endsection