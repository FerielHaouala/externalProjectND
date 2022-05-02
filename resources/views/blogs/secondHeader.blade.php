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
    <div class="background_header" style="  background: center / contain no-repeat;
        background-image: url(/assets/img/3.png)!important;
        background-position: top right;
        margin-right: 0px;
        padding: 0px;">
        <nav class="navbar navbar-light fixed-top" id="mainNav" style="margin: 50px;background: transparent;position: absolute;padding: 0px 0px;margin-bottom: 0px;border-width: 0px;">
            <div class="container">
            <a href="/blogs/neurodata">
                           <img class="shadow-lg" src="/assets/img/logos/logo.png">
                       </a>
                <button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-center ms-auto insta">
                        <li class="nav-item nav-link"><a class="nav-link active" href="/blogs/neurodata/#about">About</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="/blogs/neurodata/#services">Services</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="{{ route ('contact')}}">contact</a></li>
                        <li class="nav-item nav-link"><a class="nav-link active" href="{{ route ('blogs.homePage')}}">News & Blogs</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="/blogs/neurodata/#Research">Research</a></li>
                        <li class="nav-item nav-link"><a class="nav-link" href="#">Products</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead" style="background: center / contain no-repeat;">
            <div class="diva">
                <h1 class="display-2 pulse animated" style="color: rgb(255,255,255);margin-bottom: 100px;"> @yield('title')
                </h1>
            </div>
        </header>
        <!-- SVG  SVG -->
        <div style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #D9eeec;">

                </path>
            </svg>
        </div>
    </div>

    <!--Waves Container-->

    @yield('body')
    @endsection