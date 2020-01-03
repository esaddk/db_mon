@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
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
                                    <td>{{ $loop->iteration }}</td>
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
<!-- End Sorting -->



@endsection