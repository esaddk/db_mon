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
                    <form method="get" action="{{ route('report_task') }}">
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
                    <h4>DBA Monthly Report</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Month</th>
                                    <th>RDBMS</th>
                                    <th>Provisioning </th>
                                    <th>TroubleShooting</th>
                                </tr>
                            </thead>
                            {{-- @forelse($availbilities as $row) --}}

                            <tbody>
                                @foreach ($tasks as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->month}}</td>
                                    <td>{{$row->rdbms}}</td>
                                    <td>{{$row->provisioning}}</td>
                                    <td>{{$row->troubleshooting}}</td>
                                </tr>
                                {{-- @empty
                                <tr>
                                    <td class="text-center" colspan="7">Tidak ada data transaksi hari ini</td>
                                </tr> --}}


                                @endforeach
                                {{-- @endforelse --}}
                            </tbody>
                        </table>
                        <div style="margin-right: 20px;">
                            {{-- <button type="button" class=""
                                style="float: right;margin-top: 20px;" data-toggle="modal"
                                data-target="#modalTambah">Export Pdf
                            </button> --}}
                            <a href="{{ route('pdf_task')}}" target="_blank" class="btn btn-primary ripple mr-1 mb-2"
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

@endsection