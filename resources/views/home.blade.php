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
                        {{-- <a class="btn btn-gradient-01" href="#">Add Widget</a> --}}
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
                            <i class="ion-social-buffer-outline text-oracle"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">Oracle</div>
                            <div class="number">10 Database</div>
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
                            <i class="ion-social-buffer-outline text-mysql"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">MySQL</div>
                            <div class="number">20 Database</div>
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
                            <i class="ion-social-buffer-outline text-postgre"></i>
                        </div>
                        <div class="media-body align-self-center">
                            <div class="title text-facebook">PostgreSQL</div>
                            <div class="number">15 Database</div>
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
                    <h2>DBA TASK</h2>
                    <div class="widget-options">
                        {{-- <button t  ype="button" class="btn btn-shadow">View all</button> --}}
                    </div>
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <div class="row">
                        <div class=" col-12 no-padding">
                            <div>
                                <canvas id="orders"></canvas>
                            </div>
                        </div>
                        {{-- <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
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
                        </div> --}}
                    </div>
                </div>


            </div>
            <!-- End Widget 09 -->
        </div>
    </div>
    <!-- End Row -->

    <div class="row flex-row">
        <div class="col-xl-12 col-md-6">
            <!-- Begin Widget 09 -->
            <div class="widget widget-09 has-shadow">
                <!-- Begin Widget Header -->
                <div class="widget-header d-flex align-items-center">
                    <h2>Delivered Orders</h2>
                    {{-- <div class="widget-options">
                        <button type="button" class="btn btn-shadow">View all</button>
                    </div> --}}
                </div>
                <!-- End Widget Header -->
                <!-- Begin Widget Body -->
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-10 col-12 no-padding">
                            {{-- <div>
                                <canvas id="orders"></canvas>
                            </div> --}}
                        </div>
                        {{-- <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
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
                        </div> --}}
                    </div>
                </div>


            </div>
            <!-- End Widget 09 -->
        </div>
    </div>
    <!-- End Row -->


</div>
@endsection