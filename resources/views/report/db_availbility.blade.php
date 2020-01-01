@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>DB Availbility</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>CREATOR</th>
                                    <th>INSERT_DATE</th>
                                    <th>DB_DETAILS_ID</th>
                                    <th>COUNT_PERCENT</th>
                                    <th><span style="width:100px;">STATUS</span></th>
                                </tr>
                            </thead>
                            {{-- @forelse($availbilities as $row) --}}
                            @foreach ($availbilities as $row)


                            <tbody>

                                <tr>
                                    <td>{{ $row->user->name }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->rdbms->name }}</td>
                                    <td>{{ $row->count_percent }}</td>
                                    <td>{{ $row->status }}</td>
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
                            <a href="{{ route('pdf_availbility')}}" target="_blank"
                                class="btn btn-primary ripple mr-1 mb-2" style="float: right;margin-top: 20px;">
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