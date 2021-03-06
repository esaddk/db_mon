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
    <title>DB Monitoring - Dashboard</title>
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
    <link rel="stylesheet" href="{{ asset('elis/assets/css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('elis/assets/css/owl-carousel/owl.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('elis/assets/css/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('elis/assets/css/bootstrap-select/bootstrap-select.min.css') }}">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body id="page-top">
    <!-- Begin Preloader -->
    {{-- <div id="preloader">
            <div class="canvas">
                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo" class="loader-logo">
    <div class="spinner"></div>
    </div>
    </div> --}}
    <!-- End Preloader -->
    <div class="page">
        <!-- Begin Header -->
        <header class="header">
            <nav class="navbar fixed-top">
                <!-- Begin Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="ion-close-round"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="Search something ..." class="form-control">
                    </form>
                </div>
                <!-- End Search Box-->
                <!-- Begin Topbar -->
                <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                    <!-- Begin Logo -->
                    <div class="navbar-header">
                        <a href="db-default.html" class="navbar-brand">
                            <div class="brand-image brand-big">
                                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo" style="width: 50px;"
                                    class="logo-big">
                                DB Monitoring
                            </div>
                            <div class="brand-image brand-small">
                                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo" style="width: 50px;"
                                    class="logo-small">
                            </div>
                        </a>
                        <!-- Toggle Button -->
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <!-- End Toggle -->
                    </div>
                    <!-- End Logo -->
                    <!-- Begin Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                        <!-- Search -->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i
                                    class="la la-search"></i></a></li>
                        <!-- End Search -->
                        <!-- Begin Notifications -->
                        {{-- <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                    <li>
                                        <div class="notifications-header">
                                            <div class="title">Notifications (4)</div>
                                            <div class="notifications-overlay"></div>
                                            <img src="elis/assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New user registered
                                                </div>
                                                <span class="date">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New event added
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-history"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Server rebooted
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-twitter"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    You have 3 new followers
                                                </div>
                                                <span class="date">10 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End Notifications --> --}}
                        <!-- User -->
                        <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img
                                    src="elis/assets/img/avatar/avatar-01.png" alt="..."
                                    class="avatar rounded-circle"></a>
                            <ul aria-labelledby="user" class="user-size dropdown-menu">
                                <li class="welcome">
                                    <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                    <img src="elis/assets/img/avatar/avatar-01.png" alt="..." class="rounded-circle">
                                </li>
                                <li class="welcome" style="text-align: center;">
                                    <span>Hello {{ ucfirst(Auth::user()->name) }} !</span>
                                </li>
                                <li><a rel="nofollow" href="{{ route('logout') }}"
                                        class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                            </ul>
                        </li>
                        <!-- End User -->
                        <!-- Begin Quick Actions -->
                        {{-- <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li> --}}
                        <!-- End Quick Actions -->
                    </ul>
                    <!-- End Navbar Menu -->
                </div>
                <!-- End Topbar -->
            </nav>
        </header>
        <!-- End Header -->
        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">

            @include('layouts.sidebar')
            @include('sweetalert::alert')

            <div class="content-inner">

                @yield('content')
                <!-- End Container -->
                <!-- Begin Page Footer-->
                <footer class="main-footer">
                    <div class="row">
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                            <p class="text-gradient-02">Design By esaddk.</p>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                            {{-- <ul class="nav"> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="documentation.html">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="changelog.html">Changelog</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <!-- End Page Footer -->
                <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                <!-- Offcanvas Sidebar -->
                <div class="off-sidebar from-right">
                    <div class="off-sidebar-container">
                        <header class="off-sidebar-header">
                            <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                <li><a class="active" data-toggle="tab" href="#messenger" role="tab"
                                        id="messenger-tab">Messages</a></li>
                                <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                            </ul>
                            <a href="#off-canvas" class="off-sidebar-close"></a>
                        </header>
                        <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                            <div class="tab-content">
                                <!-- Begin Messenger -->
                                <div role="tabpanel" class="tab-pane show active fade" id="messenger"
                                    aria-labelledby="messenger-tab">
                                    <!-- Begin Chat Message -->
                                    <span class="date">Today</span>
                                    <div class="messenger-message messenger-message-sender">
                                        <img class="messenger-image messenger-image-default"
                                            src="elis/assets/img/avatar/avatar-02.jpg" alt="...">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    <span class="mb-2">Brandon wrote</span>
                                                    Hi David, what's up?
                                                </p>
                                            </div>
                                            <div class="messenger-details">
                                                <span class="messenger-message-localization font-size-small">2 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-recipient">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    Hi Brandon, fine and you?
                                                </p>
                                                <p>
                                                    I'm working on the next update of Elisyam
                                                </p>
                                            </div>
                                            <div class="messenger-details">
                                                <span class="messenger-message-localisation font-size-small">3 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-sender">
                                        <img class="messenger-image messenger-image-default"
                                            src="elis/assets/img/avatar/avatar-02.jpg" alt="...">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    <span class="mb-2">Brandon wrote</span>
                                                    I can't wait to see
                                                </p>
                                            </div>
                                            <div class="messenger-details">
                                                <span class="messenger-message-localization font-size-small">5 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-recipient">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    I'm almost done
                                                </p>
                                            </div>
                                            <div class="messenger-details">
                                                <span class="messenger-message-localisation font-size-small">10 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="date">Yesterday</span>
                                    <div class="messenger-message messenger-message-sender">
                                        <img class="messenger-image messenger-image-default"
                                            src="elis/assets/img/avatar/avatar-05.jpg" alt="...">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    I updated the server tonight
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-recipient">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    Didn't you have any problems?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-sender">
                                        <img class="messenger-image messenger-image-default"
                                            src="elis/assets/img/avatar/avatar-05.jpg" alt="...">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    No!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="messenger-message messenger-message-recipient">
                                        <div class="messenger-message-wrapper">
                                            <div class="messenger-message-content">
                                                <p>
                                                    Great!
                                                </p>
                                                <p>
                                                    See you later!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Chat Message -->
                                    <!-- Begin Message Form -->
                                    <div class="enter-message">
                                        <div class="enter-message-form">
                                            <input type="text" placeholder="Enter your message..." />
                                        </div>
                                        <div class="enter-message-button">
                                            <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Message Form -->
                                </div>
                                <!-- End Messenger -->
                                <!-- Begin Today -->
                                <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                    <!-- Begin Today Stats -->
                                    <div class="sidebar-heading pt-0">Today</div>
                                    <div class="today-stats mt-3 mb-3">
                                        <div class="row">
                                            <div class="col-4 text-center">
                                                <i class="la la-users"></i>
                                                <div class="counter">264</div>
                                                <div class="heading">Clients</div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <i class="la la-cart-arrow-down"></i>
                                                <div class="counter">360</div>
                                                <div class="heading">Sales</div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <i class="la la-money"></i>
                                                <div class="counter">$ 4,565</div>
                                                <div class="heading">Earnings</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Today Stats -->
                                    <!-- Begin Friends -->
                                    <div class="sidebar-heading">Friends</div>
                                    <div class="quick-friends mt-3 mb-3">
                                        <ul class="list-group w-100">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left align-self-center mr-3">
                                                        <img src="elis/assets/img/avatar/avatar-02.jpg" alt="..."
                                                            class="img-fluid rounded-circle" style="width: 35px;">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="javascript:void(0);">Brandon Smith</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left align-self-center mr-3">
                                                        <img src="elis/assets/img/avatar/avatar-03.jpg" alt="..."
                                                            class="img-fluid rounded-circle" style="width: 35px;">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="javascript:void(0);">Louis Henry</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left align-self-center mr-3">
                                                        <img src="elis/assets/img/avatar/avatar-04.jpg" alt="..."
                                                            class="img-fluid rounded-circle" style="width: 35px;">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="javascript:void(0);">Nathan Hunter</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left align-self-center mr-3">
                                                        <img src="elis/assets/img/avatar/avatar-05.jpg" alt="..."
                                                            class="img-fluid rounded-circle" style="width: 35px;">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="javascript:void(0);">Megan Duncan</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left align-self-center mr-3">
                                                        <img src="elis/assets/img/avatar/avatar-06.jpg" alt="..."
                                                            class="img-fluid rounded-circle" style="width: 35px;">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="javascript:void(0);">Beverly Oliver</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Friends -->
                                    <!-- Begin Settings -->
                                    <div class="sidebar-heading">Settings</div>
                                    <div class="quick-settings mt-3 mb-3">
                                        <ul class="list-group w-100">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <p class="text-dark">Notifications Email</p>
                                                    </div>
                                                    <div class="media-right align-self-center">
                                                        <label>
                                                            <input class="toggle-checkbox" type="checkbox" checked>
                                                            <span>
                                                                <span></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <p class="text-dark">Notifications Sound</p>
                                                    </div>
                                                    <div class="media-right align-self-center">
                                                        <label>
                                                            <input class="toggle-checkbox" type="checkbox">
                                                            <span>
                                                                <span></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <p class="text-dark">Chat Message Sound</p>
                                                    </div>
                                                    <div class="media-right align-self-center">
                                                        <label>
                                                            <input class="toggle-checkbox" type="checkbox" checked>
                                                            <span>
                                                                <span></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Settings -->
                                </div>
                                <!-- End Today -->
                            </div>
                        </div>
                        <!-- End Offcanvas Container -->
                    </div>
                    <!-- End Offsidebar Container -->
                </div>
                <!-- End Offcanvas Sidebar -->
            </div>
            <!-- End Content -->
        </div>
        <!-- End Page Content -->
    </div>
    <!-- Begin Success Modal -->
    <div id="delay-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="sa-icon sa-success animate" style="display: block;">
                        <span class="sa-line sa-tip animateSuccessTip"></span>
                        <span class="sa-line sa-long animateSuccessLong"></span>
                        <div class="sa-placeholder"></div>
                        <div class="sa-fix"></div>
                    </div>
                    <div class="section-title mt-5 mb-5">
                        <h2 class="text-dark">Meeting successfully created</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Success Modal -->
    <!-- Begin Modal -->
    <div id="modal-view-event" class="modal modal-top fade calendar-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title event-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="media">
                        <div class="media-left align-self-center mr-3">
                            <div class="event-icon"></div>
                        </div>
                        <div class="media-body align-self-center mt-3 mb-3">
                            <div class="event-body"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Begin Vendor Js -->
    <script src="{{ asset('elis/assets/vendors/js/base/jquery.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/base/core.min.js') }}"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="{{ asset('elis/assets/vendors/js/nicescroll/nicescroll.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/chart/chart.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/app/app.js') }}"></script>
    <script src="{{ asset('elis/assets/vendors/js/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="{{ asset('elis/assets/js/dashboard/db-default.js') }}"></script>
    <script>
        function callAjax(){
        }

        

        $(document).ready(function(){
    
     
            $.ajax({
            type:"GET",
            url:"chartTask",
            success:function(result){
                var ctx = document.getElementById("orders").getContext('2d');
                var myChart = new Chart(ctx, {
		type: 'roundedBar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Provisioning',
				data: result[0],
				borderColor: "#fff",
				backgroundColor: "#5d5386",
				hoverBackgroundColor: "#483d77"
			}, {
				label: 'Troubleshooting',
				data: result[1],
				borderColor: "#fff",
				backgroundColor: "#e4e8f0",
				hoverBackgroundColor: "#dde1e9"
			}]
		},
		options: {
			responsive: true,
			barRoundness: 1,
			tooltips: {
				backgroundColor: 'rgba(47, 49, 66, 0.8)',
				titleFontSize: 13,
				titleFontColor: '#fff',
				caretSize: 0,
				cornerRadius: 4,
				xPadding: 5,
				displayColors: false,
				yPadding: 5,
			},
			legend: {
				display: true,
				position: 'bottom',
				labels: {
					fontColor: "#2e3451",
					usePointStyle: true,
					padding: 50,
					fontSize: 13
				}
			},
			scales: {
				xAxes: [{
					barThickness: 20,
					stacked: false,
					gridLines: {
						drawBorder: false,
						display: false
					},
					ticks: {
						display: true
					}
				}],
				yAxes: [{
					stacked: false,
					gridLines: {
						drawBorder: false,
						display: false
					},
					ticks: {
						display: false
					}
				}]
			}
		}
    });
            }});
	
        });
        
    </script>

    <!-- End Page Snippets -->
</body>

</html>