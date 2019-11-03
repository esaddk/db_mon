<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        @yield('title')

        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('elis/assets/img/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('elis/assets/img/favicon-32x32.ico') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('elis/assets/img/favicon-16x16.ico') }}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('elis/assets/vendors/css/base/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('elis/assets/vendors/css/base/elisyam-1.5.min.css') }}">
        
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                    <div class="elisyam-bg background-01">
                        <div class="elisyam-overlay overlay-01"></div>
                        <div class="authentication-col-content mx-auto">                            
                            @yield('h1')
                            <span class="description">
                                Etiam consequat urna at magna bibendum, rmentum vitae mi massa egestas. 
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                @yield('content')
                
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="{{ asset('elis/assets/vendors/js/base/jquery.min.js') }}"></script>
        <script src="{{ asset('elis/assets/vendors/js/base/core.min.js') }}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{ asset('elis/assets/vendors/js/app/app.min.js') }}"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>