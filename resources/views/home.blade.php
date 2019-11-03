@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Dashboard</h2>
                <div>
                <div class="page-header-tools">
                    <a class="btn btn-gradient-01" href="#">Add Widget</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Begin Row -->
    <div class="row flex-row">
        <!-- Begin Facebook -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-facebook text-facebook"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">David Green</div>
                            <div class="number">10,865 Likes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facebook -->
        <!-- Begin Twitter -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-twitter text-twitter"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-twitter">@David_Green</div>
                            <div class="number">8,986 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Twitter -->
        <!-- Begin Linkedin -->
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="widget widget-12 has-shadow">
                <div class="widget-body">
                    <div class="media">
                        <div class="align-self-center ml-5 mr-5">
                            <i class="ion-social-linkedin-outline text-linkedin"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-linkedin">@David_Green</div>
                            <div class="number">3,654 Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Linkedin -->
    </div>
    <!-- End Row -->
    <!-- Begin Row -->
    <div class="row flex-row">
        <div class="col-xl-12 col-md-6">
            <!-- Begin Widget 09 -->
            <div class="widget widget-09 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header d-flex align-items-center">
                    <h2>Delivered Orders</h2>
                    <div class="widget-options">
                        <button type="button" class="btn btn-shadow">View all</button>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-10 col-12 no-padding">
                            <div>
                                <canvas id="orders"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
                            <div class="new-orders">
                                <div class="title">New Orders</div>
                                <div class="circle-orders">
                                    <div class="percent-orders"></div>
                                </div>
                            </div>
                            <div class="some-stats mt-5">
                                <div class="title">Total Delivered</div>
                                <div class="number text-blue">856</div>
                            </div>
                            <div class="some-stats mt-3">
                                <div class="title">Total Estimated</div>
                                <div class="number text-blue">297</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget 09 -->
        </div>
    </div>
    <!-- End Row -->
    <!-- Begin Row -->
    <div class="row flex-row">
        <div class="col-xl-4 col-md-6">
            <!-- Begin Widget 04 -->
            <div class="widget widget-04 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Post</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-check"></i>Valid Post
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="faq.html" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body p-0">
                    <div class="post-container">
                        <div class="media mb-3">
                            <div class="media-left align-self-center user">
                                <a href="pages-profile.html"><img src="assets/img/avatar/avatar-07.jpg" class="rounded-circle" alt="..."></a>
                            </div>
                            <div class="media-body align-self-center ml-3">
                                <div class="title">
                                    <span class="username">Lisa Garett</span> posted an image
                                </div>
                                <div class="time">42 min ago</div>
                            </div>
                        </div>
                        <img src="assets/img/background/01.jpg" alt="..." class="img-fluid">
                        <div class="col no-padding d-flex justify-content-end mt-3">
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="la la-comment"></i><span class="numb">38</span></a></li>
                                    <li><a href="#"><i class="la la-heart"></i><span class="numb">94</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Begin Write Comment -->
                    <div class="input-group mt-5">
                        <input type="text" class="form-control pr-0" placeholder="Write a comment ...">
                        <span class="input-group-addon">
                            <button class="btn" type="button">
                                <i class="la la-smile-o la-2x"></i>
                            </button>
                        </span>
                        <span class="input-group-addon">
                            <button class="btn pr-3" type="button">
                                <i class="la la-pencil la-2x"></i>
                            </button>
                        </span>
                    </div>
                    <!-- End Write Comment -->
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget 04 -->
        </div>
        <div class="col-xl-4 col-md-6">
            <!-- Begin Widget 05 -->
            <div class="widget widget-05 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Top Author</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body no-padding hidden">
                    <div class="author-avatar">
                        <span class="badge-pulse-green"></span>
                        <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle">
                    </div>
                    <div class="author-name">
                        Louis Henry
                        <span>Designer</span>
                    </div>
                    <div class="chart">
                        <div class="row no-margin justify-content-center">
                            <div class="col-12 col-xl-8 col-md-8 col-sm-8">
                                <div class="row no-margin align-items-center">
                                    <!-- Begin Chart -->
                                    <div class="col-9 no-padding">
                                        <div class="chart-graph">
                                            <div class="chart">
                                                <canvas id="sales-stats"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 no-padding text-center">
                                        <div class="chart-text">
                                            <span class="heading">Sales</span>
                                            <span class="number">364</span>
                                            <span class="cxg text-green">+35%</span>
                                        </div>
                                    </div>
                                    <!-- End Chart -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-stats">
                        <div class="row d-flex justify-content-between">
                            <div class="col-4 text-center">
                                <i class="la la-users followers"></i>
                                <div class="counter">+124</div>
                                <div class="heading">Followers</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-dribbble dribbble"></i>
                                <div class="counter">+357</div>
                                <div class="heading">Likes</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-behance behance"></i>
                                <div class="counter">+98</div>
                                <div class="heading">Followers</div>
                            </div>
                        </div>
                    </div>
                    <div class="actions text-center">
                        <a href="pages-profile.html" class="btn btn-gradient-01">View Profile</a>
                    </div>
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget 05 -->
        </div>
        <div class="col-xl-4">
            <!-- Begin Widget 06 -->
            <div class="widget widget-06 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Reviews</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body p-0">
                    <div id="list-group" class="widget-scroll" style="max-height:490px;">
                        <ul class="reviews list-group w-100">
                            <!-- 01 -->
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-start">
                                        <img src="assets/img/avatar/avatar-02.jpg" class="user-img rounded-circle" alt="...">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="username">
                                            <h4>Brandon Smith</h4>
                                        </div>
                                        <div class="msg">
                                            <div class="stars">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star-half-empty"></i>
                                            </div>
                                            <p>
                                                WoW! Amazing Work!
                                            </p>
                                        </div>
                                        <div class="meta">
                                            <span class="mr-3">30 minutes ago - 1 Reply</span>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media-right pr-3 align-self-center">
                                        <div class="like text-center">
                                            <i class="ion-heart"></i>
                                            <span>12</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End 01 -->
                            <!-- 02 -->
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-start">
                                        <img src="assets/img/avatar/avatar-05.jpg" class="user-img rounded-circle" alt="...">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="username">
                                            <h4>Megan Duncan</h4>
                                        </div>
                                        <div class="msg">
                                            <div class="stars">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                            </div>
                                            <p>
                                                Very nice! Keep up the beautiful work.
                                            </p>
                                        </div>
                                        <div class="meta">
                                            <span class="mr-3">2 hours ago</span>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media-right pr-3 align-self-center">
                                        <div class="like text-center">
                                            <i class="ion-heart"></i>
                                            <span>4</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End 02 -->
                            <!-- 03 -->
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-start">
                                        <img src="assets/img/avatar/avatar-04.jpg" class="user-img rounded-circle" alt="...">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="username">
                                            <h4>Nathan Hunter</h4>
                                        </div>
                                        <div class="msg">
                                            <div class="stars">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                            </div>
                                            <p>
                                                Nice work, good design!
                                            </p>
                                        </div>
                                        <div class="meta">
                                            <span class="mr-3">4 hours ago</span>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media-right pr-3 align-self-center">
                                        <div class="like text-center">
                                            <i class="ion-heart"></i>
                                            <span>32</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End 03 -->
                            <!-- 04 -->
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-start">
                                        <img src="assets/img/avatar/avatar-09.jpg" class="user-img rounded-circle" alt="...">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="username">
                                            <h4>Michael Bradley</h4>
                                        </div>
                                        <div class="msg">
                                            <div class="stars">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star-half-empty"></i>
                                            </div>
                                            <p>
                                                Very nice! Keep up the beautiful work.
                                            </p>
                                        </div>
                                        <div class="meta">
                                            <span class="mr-3">5 hours ago - 2 Reply</span>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media-right pr-3 align-self-center">
                                        <div class="like text-center">
                                            <i class="ion-heart"></i>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End 04 -->
                            <!-- 05 -->
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left align-self-start">
                                        <img src="assets/img/avatar/avatar-03.jpg" class="user-img rounded-circle" alt="...">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="username">
                                            <h4>Louis Henry</h4>
                                        </div>
                                        <div class="msg">
                                            <div class="stars">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star-half-empty"></i>
                                            </div>
                                            <p>
                                                I like the color combination!
                                            </p>
                                        </div>
                                        <div class="meta">
                                            <span class="mr-3">1 day ago</span>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media-right pr-3 align-self-center">
                                        <div class="like text-center">
                                            <i class="ion-heart"></i>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End 05 -->
                        </ul>
                    </div>
                    <!-- End List -->
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget 06 -->
        </div>
    </div>
    <!-- End Row -->
    <div class="row flex-row">
        <div class="col-xl-12">
            <!-- Begin Widget 07 -->
            <div class="widget widget-07 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Product Overview</h2>
                    <div class="widget-options">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary ripple">Week</button>
                            <button type="button" class="btn btn-primary ripple">Month</button>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="check-all" id="check-all">
                                            <label for="check-all"></label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Country</th>
                                    <th>Ship Date</th>
                                    <th><span style="width:100px;">Status</span></th>
                                    <th>Order Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb1" id="cb1">
                                            <label for="cb1"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">054-01-FR</span></td>
                                    <td>Lori Baker</td>
                                    <td>US</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb2" id="cb2">
                                            <label for="cb2"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">021-12-US</span></td>
                                    <td>Lawrence Crawford</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb3" id="cb3">
                                            <label for="cb3"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">189-01-RU</span></td>
                                    <td>Samuel Walker</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb4" id="cb4">
                                            <label for="cb4"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">092-06-FR</span></td>
                                    <td>Angela Walters</td>
                                    <td>US</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span></td>
                                    <td>$129.85</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb5" id="cb5">
                                            <label for="cb5"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">021-09-US</span></td>
                                    <td>Ryan Hanson</td>
                                    <td>ES</td>
                                    <td>07/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$199.95</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb6" id="cb6">
                                            <label for="cb6"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">054-01-FR</span></td>
                                    <td>Evelyn Black</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb7" id="cb7">
                                            <label for="cb7"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">021-12-US</span></td>
                                    <td>James Morris</td>
                                    <td>EN</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb8" id="cb8">
                                            <label for="cb8"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">189-01-RU</span></td>
                                    <td>Valentin H.</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb9" id="cb9">
                                            <label for="cb9"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">092-06-FR</span></td>
                                    <td>Beverly Matthews</td>
                                    <td>RU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$129.85</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:5%;">
                                        <div class="styled-checkbox mt-2">
                                            <input type="checkbox" name="cb10" id="cb10">
                                            <label for="cb10"></label>
                                        </div>
                                    </td>
                                    <td><span class="text-primary">021-09-US</span></td>
                                    <td>Jeffrey Arnold</td>
                                    <td>US</td>
                                    <td>07/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$199.95</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Widget Body -->
                <!-- Begin Widget Footer -->
                <div class="widget-footer d-flex align-items-center">
                    <div class="mr-auto p-2">
                        <span class="display-items">Showing 1-30 / 150 Results</span>
                    </div>
                    <div class="p-2">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="ion-chevron-left"></i></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <span class="page-link">2<span class="sr-only">(current)</span></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Widget Footer -->
            </div>
            <!-- End Widget 07 -->
        </div>
    </div>
    <div class="row flex-row">
        <div class="col-xl-7 col-md-6">
            <!-- Begin Widget 10 -->
            <div class="widget widget-10 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Support Tickets</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-bell-slash"></i>Disable Alerts
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body no-padding">
                    <ul class="ticket list-group w-100">
                        <!-- 01 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center pr-4">
                                    <img src="assets/img/avatar/avatar-02.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Brandon Smith</h4>
                                    </div>
                                    <div class="msg">
                                        <p>
                                            Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et mauris sapien sem, ornare id mauris vitae, ultricies volutpat ...
                                        </p>
                                    </div>
                                    <div class="status"><span class="open mr-2">Open</span>(1 hour ago)</div>
                                </div>
                            </div>
                        </li>
                        <!-- End 01 -->
                        <!-- 02 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center pr-4">
                                    <img src="assets/img/avatar/avatar-04.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Nathan Hunter</h4>
                                    </div>
                                    <div class="msg">
                                        <p>
                                            Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et mauris sapien sem, ornare id mauris vitae, ultricies volutpat ...
                                        </p>
                                    </div>
                                    <div class="status"><span class="pending mr-2">Pending</span>(2 hours ago)</div>
                                </div>
                            </div>
                        </li>
                        <!-- End 02 -->
                        <!-- 03 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center pr-4">
                                    <img src="assets/img/avatar/avatar-05.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Megan Duncan</h4>
                                    </div>
                                    <div class="msg">
                                        <p>
                                            Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et mauris sapien sem, ornare id mauris vitae, ultricies volutpat ...
                                        </p>
                                    </div>
                                    <div class="status"><span class="closed mr-2">Closed</span>(1 day ago)</div>
                                </div>
                            </div>
                        </li>
                        <!-- End 03 -->
                    </ul>
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget 10 -->
        </div>
        <div class="col-xl-5">
            <!-- Begin Widget 11 -->
            <div class="widget widget-11 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Activity Log</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-history"></i>History
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-bell-slash"></i>Disable Alerts
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body p-0 widget-scroll" style="max-height:450px;">
                <!-- Begin 01 -->
                <div class="timeline violet">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="user-image">
                            <img class="rounded-circle" src="assets/img/avatar/avatar-06.jpg" alt="...">
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Beverly Oliver</span>
                                Send you a friend request
                            </div>
                            <div class="time">4 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 01 -->
                <!-- Begin 02 -->
                <div class="timeline red">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="timeline-icon">
                            <i class="la la-spinner"></i>
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                Server rebooted
                            </div>
                            <div class="time">10 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 02 -->
                <!-- Begin 03 -->
                <div class="timeline violet">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="user-image">
                            <img class="rounded-circle" src="assets/img/avatar/avatar-05.jpg" alt="...">
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Megan Duncan</span>
                                Followed 4 people
                                <div class="users-like">
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="time">12 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 03 -->
                <!-- Begin 04 -->
                <div class="timeline blue">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="timeline-icon">
                            <i class="la la-heart-o"></i>
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Brandon Smith</span>
                                Liked <span class="font-weight-bold"><a href="#">Elisyam Admin Template</a></span>
                            </div>
                            <div class="time">30 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 04 -->
                <!-- Begin 05 -->
                <div class="timeline violet">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="timeline-icon">
                            <i class="la la-twitter"></i>
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                + 3 new followers
                                <div class="users-like">
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                    <a href="profile.html">
                                        <img src="assets/img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="time">34 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 05 -->
                <!-- Begin 06 -->
                <div class="timeline violet">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="user-image">
                            <img class="rounded-circle" src="assets/img/avatar/avatar-04.jpg" alt="...">
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Nathan Hunter</span>
                                Invited you in a group
                            </div>
                            <div class="time">42 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 06 -->
                <!-- Begin 06 -->
                <div class="timeline violet">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="user-image">
                            <img class="rounded-circle" src="assets/img/avatar/avatar-03.jpg" alt="...">
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Louis Henry</span>
                                Is now following you
                            </div>
                            <div class="time">50 min ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 06 -->
                <!-- Begin 07 -->
                <div class="timeline blue">
                    <div class="timeline-content d-flex align-items-center">
                        <div class="timeline-icon">
                            <i class="la la-image"></i>
                        </div>
                        <div class="d-flex flex-column mr-auto">
                            <div class="title">
                                <span class="username">Brandon Smith</span>
                                Uploaded <span class="font-weight-bold"><a href="#">8 photos</a></span>
                            </div>
                            <div class="time">1 hour ago</div>
                        </div>
                    </div>
                </div>
                <!-- End 07 -->
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget 11 -->
        </div>
    </div>
    <!-- End Row -->
    <div class="row no-margin">
        <div class="col-xl-12">
            <!-- Begin Widget -->
            <div class="row widget has-shadow">
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Calendar</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    Add Event
                                </a>
                                <a href="app-calendar.html" class="dropdown-item"> 
                                    Basic Calendar
                                </a>
                                <a href="app-calendar-list.html" class="dropdown-item"> 
                                    List Views
                                </a>
                                <a href="app-calendar-event.html" class="dropdown-item"> 
                                    External Events
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <!-- Begin Calendar -->
                    <div id="demo-calendar"></div>
                    <!-- End Calendar -->
                </div>
                <!-- End Widget Body -->
            </div>
            <!-- End Widget -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
    <!-- Begin Row -->
    <div class="row flex-row">
        <!-- Begin Widget 18 -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="widget widget-18 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Messages Box</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="app-chat.html" class="dropdown-item"> 
                                    <i class="la la-comments"></i>New Message
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-bell-slash"></i>Disable Alerts
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <div class="widget-body">
                    <div class="input-group">
                        <span class="input-group-addon pr-0 pl-0">
                            <a class="btn" href="#">
                                <i class="la la-search la-2x"></i>
                            </a>
                        </span>
                        <input type="text" class="form-control no-ppading-right no-padding-left" placeholder="Search">
                    </div>
                    <div class="new-message">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="new-message-sender">Nathan Hunter</div>
                                <div class="new-message-time">New message about 2 minutes ago</div>
                            </div>
                            <div class="media-right align-self-center">
                                <div class="actions">
                                    <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group w-100 mt-5">
                        <li class="list-group-item">
                            <div class="other-message">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="other-message-sender">Brandon Smith</div>
                                        <div class="other-message-time">Are you serious? - 3 min ago</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="actions">
                                            <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="other-message">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="other-message-sender">Louis Henry</div>
                                        <div class="other-message-time">Bonne idée, coucou à ... - 10 min ago</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="actions">
                                            <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="other-message">
                                <div class="media">
                                    <div class="media-left align-self-center mr-3">
                                        <img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="other-message-sender">Megan Duncan</div>
                                        <div class="other-message-time">See you later! - 20 min ago</div>
                                    </div>
                                    <div class="media-right align-self-center">
                                        <div class="actions">
                                            <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Widget 18 -->
        <!-- Begin Widget 19 -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="widget widget-19 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>New Meeting</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-bell-slash"></i>Disable Alerts
                                </a>
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Edit Widget
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <div class="widget-body p-0">
                    <div class="form-group row mt-3 mr-0 mb-3 ml-0">
                        <div class="col-xl-12">
                            <label class="form-control-label">Meeting Name</label>
                            <input type="text" value="My Meeting" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mr-0 mb-3 ml-0">
                        <div class="col-xl-8 mb-3">
                            <label class="form-control-label">Date</label>
                            <select name="meeting-date" class="custom-select form-control">
                                <option value="">Select Date</option>
                                <option value="01">Sun 1 April</option>
                                <option value="02">Mon 2 April</option>
                                <option value="03">Tue 3 April</option>
                                <option value="04">Wed 4 April</option>
                                <option value="05">Thu 5 April</option>
                                <option value="07">Fri 6 April</option>
                                <option value="08">Sat 7 April</option>
                                <option value="09">Sun 8 April</option>
                                <option value="10">Mon 9 April</option>
                                <option value="11">Tue 10 April</option>
                                <option value="12">Wed 11 April</option>
                                <option value="05">Thu 12 April</option>
                                <option value="07">Fri 13 April</option>
                                <option value="08">Sat 14 April</option>
                                <option value="09">Sun 15 April</option>
                                <option value="10">Mon 16 April</option>
                                <option value="11">Tue 17 April</option>
                                <option value="12">Wed 18 April</option>
                                <option value="05">Thu 19 April</option>
                                <option value="07">Fri 20 April</option>
                                <option value="08">Sat 21 April</option>
                                <option value="09">Sun 22 April</option>
                                <option value="10">Mon 23 April</option>
                                <option value="11">Tue 24 April</option>
                                <option value="04">Wed 25 April</option>
                                <option value="05">Thu 26 April</option>
                                <option value="07">Fri 27 April</option>
                                <option value="08">Sat 28 April</option>
                                <option value="09">Sun 29 April</option>
                                <option value="10">Mon 30 April</option>
                            </select>
                        </div>
                        <div class="col-xl-4">
                            <label class="form-control-label">Hour</label>
                            <select name="meeting-hour" class="custom-select form-control">
                                <option value="">Select Hour</option>
                                <option value="01">07:00 am</option>
                                <option value="02">08:00 am</option>
                                <option value="03">09:00 am</option>
                                <option value="04">10:00 am</option>
                                <option value="05">11:00 am</option>
                                <option value="07">12:00 am</option>
                                <option value="08">01:00 pm</option>
                                <option value="09">02:00 pm</option>
                                <option value="10">03:00 pm</option>
                                <option value="08">04:00 pm</option>
                                <option value="09">05:00 pm</option>
                                <option value="10">06:00 pm</option>
                                <option value="08">07:00 pm</option>
                                <option value="09">08:00 pm</option>
                                <option value="10">09:00 pm</option>
                                <option value="08">10:00 pm</option>
                                <option value="09">11:00 pm</option>
                                <option value="10">12:00 pm</option>
                            </select>
                        </div>
                    </div>
                    <ul class="list-group w-100 widget-scroll" style="max-height:250px;">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Brandon Smith</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Louis Henry</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Nathan Hunter</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Megan Duncan</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Beverly Oliver</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-07.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Lisa Garett</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-08.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Peter Collins</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-center mr-3">
                                    <img src="assets/img/avatar/avatar-09.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="people-name">Michael Bradley</div>
                                </div>
                                <div class="media-right align-self-center">
                                    <div class="checkbox check"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center mt-4 mb-3">
                        <button type="button" class="btn btn-gradient-01" data-toggle="modal" data-target="#delay-modal">
                            Create Meeting
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Widget 19 -->
        <!-- Begin Widget 20 -->
        <div class="col-xl-4">
            <div class="widget widget-20 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header bordered d-flex align-items-center">
                    <h2>Files</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="la la-ellipsis-h"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"> 
                                    <i class="la la-edit"></i>Manage Files
                                </a>
                                <a href="#" class="dropdown-item faq"> 
                                    <i class="la la-question-circle"></i>FAQ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Widget Header -->
                <div class="widget-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget20 owl-carousel">
                                <div class="item">
                                    <div class="card-image">
                                        <img src="assets/img/background/03.jpg" alt="...">
                                        <div class="card-overlay card-overlay-01">
                                            <div class="card-overlay-content">
                                                <div class="category">
                                                    <a href="#">Category</a>
                                                </div>
                                                <a href="#0" class="card-title">Title Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-image">
                                        <img src="assets/img/background/04.jpg" alt="...">
                                        <div class="card-overlay card-overlay-02">
                                            <div class="card-overlay-content">
                                                <div class="category">
                                                    <a href="#">Category</a>
                                                </div>
                                                <a href="#0" class="card-title">Title Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-image">
                                        <img src="assets/img/background/05.jpg" alt="...">
                                        <div class="card-overlay card-overlay-01">
                                            <div class="card-overlay-content">
                                                <div class="category">
                                                    <a href="#">Category</a>
                                                </div>
                                                <a href="#0" class="card-title">Title Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card-image">
                                        <img src="assets/img/background/02.jpg" alt="...">
                                        <div class="card-overlay card-overlay-02">
                                            <div class="card-overlay-content">
                                                <div class="category">
                                                    <a href="#">Category</a>
                                                </div>
                                                <a href="#0" class="card-title">Title Collection</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mr-0 ml-0">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-video-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">My Video</a></div>
                                    <div class="files-number">84 Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-audio-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">My Songs</a></div>
                                    <div class="files-number">786 Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-picture-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">Photos</a></div>
                                    <div class="files-number">189 Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-zip-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">Template</a></div>
                                    <div class="files-number">36 Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-pdf-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">Pdf</a></div>
                                    <div class="files-number">19 Files</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                            <div class="media w-100">
                                <div class="align-self-center mr-2">
                                    <i class="la la-file-powerpoint-o"></i>
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="files-title"><a href="#">Presentation</a></div>
                                    <div class="files-number">263 Files</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Widget 20 -->
    </div>
    <!-- End Row -->
</div>
@endsection
