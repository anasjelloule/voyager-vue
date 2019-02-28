<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @if(isset($page)) {{ $page->title." |" }} @endif{{ setting('site.title') }} </title>

    <head>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('storage/'.setting('site.icon')) }}" sizes="64x64" />

        <!-- CSS Global Compulsory -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css')}}" />
        <!-- CSS  Template -->
        <link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}" /> @yield('style')
    </head>
</head>

<body>
    <!-- Skippy -->
    <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
        <div class="container">
            <span class="u-skiplink-text">Skip to main content</span>
        </div>
    </a>
    <!-- End Skippy -->
    <div class="container-fluid bg-primary top-header px-6">
        <div class="row justify-content-between align-items-center">
            <ul class="icon-social ">
                <li class="ml-0">
                    <a href="{{ setting('site.facebook') }}" target="_blank">
                        <span class="soci"><i class="fab fa-facebook-f"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('site.twitter') }}" target="_blank">
                        <span class="soci"><i class="fab fa-twitter"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('site.instagram') }}" target="_blank">
                        <span class="soci"><i class="fab fa-instagram"></i></span>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('site.youtube') }}" target="_blank">
                        <span class="soci"><i class="fab fa-youtube"></i></span>
                    </a>
                </li>
            </ul>
            <img src="{{asset('img/logo_top_bar.png')}}" class="my-3" alt="top barre" />
            <div class="d-flex align-items-center">
                <span class="text-white mr-5"><strong>Languages</strong></span>
                <div class="btn-group rounded d-block position-relative lang">
                    <select class="  py-2 px-3 pr-6 lang_fr">
                        <option disabled>
                            <span class="font-size-14">English</span>
                            <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
                        </option>
                        <option selected="selected">
                            <span class="font-size-14" >Français</span>
                            <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
                        </option>
                      
                    </select>
                    <img src="{{asset('./img/fr.svg')}}" class="my-2" alt="top barre" style="width: 40px;float: right;" />
                </div>
            </div>
        </div>
    </div>
    @yield('header')