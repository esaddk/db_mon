@extends('layouts.main')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-xl-12">
        <!-- Sorting -->
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Manage RDBMS</h4>
            </div>
            <div class="widget-body">
                <div class="table-responsive">
                    <table id="sorting-table" class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID_CREATOR</th>
                                <th>INSERT_DATE</th>
                                <th>DB_DETAILS_ID</th>
                                <th>COUNT_PERCENT</th>
                                <th><span style="width:100px;">STATUS</span></th>                                
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-primary">054-01-FR</span></td>
                                <td>Lori Baker</td>
                                <td>US</td>
                                <td>10/21/2017</td>
                                <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>                                
                                <td class="td-actions">
                                    <a href="#"><i class="la la-edit edit"></i></a>
                                    <a href="#"><i class="la la-close delete"></i></a>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
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