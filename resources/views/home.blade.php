@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Count Database</h2>
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
                            <div class="number">{{($count_oracle)}} Database</div>
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
                            <div class="number">{{($count_mysql)}} Database</div>
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
                            <div class="number">{{($count_postgresql)}} Database</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Linkedin -->
    </div>
    <!-- End Row -->


    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Crucial Database</h2>
                <div>
                    <div class="page-header-tools">
                        {{-- <a class="btn btn-gradient-01" href="#">Add Widget</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row flex-row">
        <div class="col-xl-4 col-md-6">

            <div class="widget widget-05 has-shadow">
                <div class="widget-body no-padding hidden">
                    <div class="author-name">
                        ORACLE
                        <span>Crucial Database</span>
                    </div>

                    <div class="social-stats">
                        <div class="row d-flex justify-content-between">
                            <div class="col-4 text-center">
                                <i class="la la-database followers"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$name_oracle[0]->database_name}}</div>
                                <div class="heading" style="font-size: 0.8rem;">DB_NAME</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-exclamation-triangle dribbble"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_oracle[0]->crucial_level}}</div>
                                <div class="heading" style="font-size: 0.8rem;">CRITICAL_LEVEL</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-tasks behance"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_oracle[0]->size}} %</div>
                                <div class="heading" style="font-size: 0.8rem;">SPACE USAGE</div>
                            </div>
                        </div>
                    </div>
                    <div class="actions text-center">
                        <a href="{{ route('database') }}" class="btn btn-gradient-01">View DB Details</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-md-6">

            <div class="widget widget-05 has-shadow">
                <div class="widget-body no-padding hidden">
                    <div class="author-name">
                        MYSQL
                        <span>Crucial Database</span>
                    </div>

                    <div class="social-stats">
                        <div class="row d-flex justify-content-between">
                            <div class="col-4 text-center">
                                <i class="la la-database followers"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$name_mysql[0]->database_name}}</div>
                                <div class="heading" style="font-size: 0.8rem;">DB_NAME</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-exclamation-triangle dribbble"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_mysql[0]->crucial_level}}</div>
                                <div class="heading" style="font-size: 0.8rem;">CRITICAL_LEVEL</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-tasks behance"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_mysql[0]->size}} %</div>
                                <div class="heading" style="font-size: 0.8rem;">SPACE USAGE</div>
                            </div>
                        </div>
                    </div>
                    <div class="actions text-center">
                        <a href="{{ route('database') }}" class="btn btn-gradient-01">View DB Details</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-md-6">

            <div class="widget widget-05 has-shadow">
                <div class="widget-body no-padding hidden">
                    <div class="author-name">
                        POSTGRESQL
                        <span>Crucial Database</span>
                    </div>
                    <div class="social-stats">
                        <div class="row d-flex justify-content-between">
                            <div class="col-4 text-center">
                                <i class="la la-database followers"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$name_postgresql[0]->database_name}}</div>
                                <div class="heading" style="font-size: 0.8rem;">DB_NAME</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-exclamation-triangle dribbble"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_postgresql[0]->crucial_level}}</div>
                                <div class="heading" style="font-size: 0.8rem;">CRITICAL_LEVEL</div>
                            </div>
                            <div class="col-4 text-center">
                                <i class="la la-tasks behance"></i>
                                <div class="counter" style="font-size: 1.1rem;font-weight: 600;">
                                    {{$crucial_postgresql[0]->size}} %</div>
                                <div class="heading" style="font-size: 0.8rem;">SPACE USAGE</div>
                            </div>
                        </div>
                    </div>
                    <div class="actions text-center">
                        <a href="{{ route('database') }}" class="btn btn-gradient-01">View DB Details</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Row -->

    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Task DBA 2020</h2>
                <div>
                    <div class="page-header-tools">
                        {{-- <a class="btn btn-gradient-01" href="#">Add Widget</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Row -->
    <div class="row flex-row">
        <div class="col-xl-12 col-md-12">

            <div class="widget widget-09 has-shadow">

                <div class="widget-header d-flex align-items-center">
                    {{-- <h2>Delivered Orders</h2>
                    <div class="widget-options">
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="dropdown-toggle">
                                <i class="la la-circle-o-notch"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="display: none; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
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
                    </div> --}}
                </div>


                <div class="widget-body">
                    <div class="row">
                        {{-- <div class="col-xl-12 col-12 d-flex flex-column my-auto no-padding text-center">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="some-stats mb-4">
                                        <div class="title">Total Provisioning</div>
                                        <div class="number text-secondary">856</div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="some-stats mb-4">
                                        <div class="title">Total Troubleshooting</div>
                                        <div class="number text-secondary">297</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-12 col-12 p-0">
                            <div>
                                <div class="chartjs-size-monitor"
                                    style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink"
                                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="orders" width="1072" height="536" class="chartjs-render-monitor"
                                    style="display: block; height: 268px; width: 536px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Row -->

    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Top 10 Database</h2>
                <div>
                    <div class="page-header-tools">
                        {{-- <a class="btn btn-gradient-01" href="#">Add Widget</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row flex-row">
        <div class="col-xl-12">

            <div class="widget widget-07 has-shadow">

                {{-- <div class="widget-header bordered d-flex align-items-center">
                    <h2>Top 10 DB Size</h2>
                    <div class="widget-options">
                        <div class="btn-group" role="group">
                        </div>
                    </div>
                </div> --}}


                <div class="widget-body">
                    <div class="table-responsive table-scroll padding-right-10"
                        style="max-height: 520px; overflow: hidden; outline: none;" tabindex="5">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Database Name</th>
                                    <th>RDBMS Code</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($db_size as $row)
                                <tr>

                                    <td>{{$loop->iteration}}</td>
                                    <td><span class="text-primary">{{ $row->database->database_name }}</span></td>
                                    <td>{{ $row->database->rdbms->code }}</td>
                                    <td>{{ $row->size }} MB</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="actions text-center">
                        <a href="{{ route('report_db_size') }}" class="btn btn-gradient-01"
                            style="margin-top: 20px;">View Details</a>
                    </div>
                </div>




            </div>

        </div>
    </div>



</div>
@endsection