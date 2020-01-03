@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Crucial Databases</h4>
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
                                    <th>Crucial_level</th>
                                    <th>Space Usage</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>{{$crucial_mysql[0]->insert_date}}</td>
                                    <td>{{$name_mysql[0]->database_name}}</td>
                                    <td>{{$crucial_mysql[0]->crucial_level}}</td>
                                    <td>{{$crucial_mysql[0]->size}} %</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <h2 style="text-align:center">Oracle</h2>
                        <table id="sorting-tabl" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>DB_Name</th>
                                    <th>Crucial_level</th>
                                    <th>Space Usage</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>{{$crucial_oracle[0]->insert_date}}</td>
                                    <td>{{$name_oracle[0]->database_name}}</td>
                                    <td>{{$crucial_oracle[0]->crucial_level}}</td>
                                    <td>{{$crucial_oracle[0]->size}} %</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <h2 style="text-align:center">PostgreSQL</h2>
                        <table id="sorting-tabl" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>DB_Name</th>
                                    <th>Crucial_level</th>
                                    <th>Space Usage</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>{{$crucial_postgresql[0]->insert_date}}</td>
                                    <td>{{$name_postgresql[0]->database_name}}</td>
                                    <td>{{$crucial_postgresql[0]->crucial_level}}</td>
                                    <td>{{$crucial_postgresql[0]->size}} %</td>
                                </tr>
                            </tbody>
                        </table>

                        <div style="margin-right: 20px;">
                            <a href="{{ route('pdf_crucial')}}" target="_blank" class="btn btn-primary ripple mr-1 mb-2"
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