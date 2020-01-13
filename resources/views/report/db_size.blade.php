@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->

            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Filter Data</h4>
                </div>
                <div class="widget-body">
                    <form method="get" action="{{ route('report_db_size') }}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div style="margin-left:50px"><label class="form-control-label">Start Date</label></div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="la la-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control" name="start_date" id="start-date"
                                            placeholder="Start Date"
                                            {{-- value="{{ request()->get('start_date') == null ? $phd_today  : request()->get('start_date') }}"
                                            --}}>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="margin-left:50px"><label class="form-control-label">End Date</label></div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="la la-calendar"></i>
                                        </span>
                                        <input type="text" class="form-control" name="end_date" id="end-date"
                                            placeholder="End Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left:50px">
                            {{-- <a href="{{ route('report_availbility') }}" target="_blank"
                            class="btn btn-primary ripple mr-1 mb-2">
                            <i class="fa fa-print"></i> Filter Data
                            </a> --}}
                            <div class="form-group">
                                <button class="btn btn-primary ripple mr-1 mb-2">Filter Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Database Size</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <h2 style="text-align:center">MySQL</h2>
                        <table id="sorting-tabe" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>DB_Name</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($db_size as $row)
                                @if($row->database->rdbms->name == 'MySQL')
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->database->database_name }}</td>
                                    <td>{{ $row->size }}</td>
                                </tr>
                                <?php $count++; ?>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <h2 style="text-align:center">Oracle</h2>
                        <table id="sorting-tabe" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>DB_Name</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($db_size as $row)
                                @if($row->database->rdbms->name == 'Oracle')
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->database->database_name }}</td>
                                    <td>{{ $row->size }}</td>
                                </tr>
                                <?php $count++; ?>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        </tr>
                        </tbody>
                        </table>
                        <br>
                        <br>
                        <h2 style="text-align:center">PostgreSQL</h2>
                        <table id="sorting-tabe" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>DB_Name</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($db_size as $row)
                                @if($row->database->rdbms->name == 'PostgreSQL')
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->database->database_name }}</td>
                                    <td>{{ $row->size }}</td>
                                </tr>
                                <?php $count++; ?>
                                @endif
                                @endforeach
                            </tbody>
                        </table>

                        <div style="margin-right: 20px;">
                            <a href="{{ route('pdf_db_size')}}" target="_blank" class="btn btn-primary ripple mr-1 mb-2"
                                style="float: right;margin-top: 20px;">
                                <i class="fa fa-print"></i> Export Pdf
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script src="{{ asset('elis/assets/vendors/js/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('elis/assets/js/components/tables/tables.js') }}"></script>

<script src="{{ asset('elis/assets/js/components/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datepicker/moment.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/datepicker/daterangepicker.js') }}"></script>
<!-- End Sorting -->



@endsection