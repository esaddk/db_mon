@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>DB Rdbms</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CODE</th>
                                    <th>RDBMS</th>
                                    <th>VERSION</th>
                                    <th>IP SERVER</th>
                                    <th>CREATED_AT</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            {{-- @forelse($availbilities as $row) --}}



                            <tbody>
                                @foreach ($rdbms as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->code }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->version }}</td>
                                    <td>{{ $row->ip_server }}</td>
                                    <td>{{ $row->created_at }}</td>

                                    <td class="td-actions">
                                        <a href="{{ route('UpdateRdbms',$row->id) }}" data-toggle="modal"
                                            data-target="#myModalEdit-{{ $row->id }}"><i
                                                class=" la la-edit edit"></i></a>
                                        {{-- <a href="{{ route('Delete', [$row->id]) }}"><i
                                            class="la la-close delete"></i></a> --}}
                                        <button style="border: none;" class="deleteUser" data-userid="{{$row->id}}">
                                            <i class="la la-close delete"></i></button>

                                    </td>
                                </tr>
                                <div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1"
                                    role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog" style="width:55%;">
                                        <div class="modal-content">
                                            <form action="{{route('DeleteRdbms')}}" method="POST"
                                                class="remove-record-model">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h4 class="modal-title text-center" id="custom-width-modalLabel">
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>You Want You Sure Delete This Record?</h4>
                                                    <input type="hidden" , name="rdbms_id" id="rdbms_id">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                        class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- @empty
                                <tr>
                                    <td class="text-center" colspan="7">Tidak ada data transaksi hari ini</td>
                                </tr> --}}
                                <!-- Modal Edit-->
                                <div class="modal fade" style="display: none;" aria-hidden="true"
                                    id="myModalEdit-{{ $row->id }}" aria-labelledby="myModalEdit-{{ $row->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Rdbms</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="{{ route('UpdateRdbms', $row->id) }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('put') }}
                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">ID</label>
                                                        <div class="col-lg-9">
                                                            <input name="id" type="text" disabled
                                                                placeholder="placeholder" class="form-control"
                                                                value="{{$row->id}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Kode</label>
                                                        <div class="col-lg-9">
                                                            <input name="code" type="text" placeholder="placeholder"
                                                                class="form-control" value="{{$row->code}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">RDBMS</label>
                                                        <div class="col-lg-9">
                                                            <select name="name" class="custom-select form-control">
                                                                <option>{{$row->name}}</option>
                                                                <option>MySQL</option>
                                                                <option>Oracle</option>
                                                                <option>PostgreSQL</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Version</label>
                                                        <div class="col-lg-9">
                                                            <input name="version" type="text" placeholder="placeholder"
                                                                class="form-control" value="{{$row->version}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">IP Server</label>
                                                        <div class="col-lg-9">
                                                            <input name="ip_server" type="text"
                                                                placeholder="placeholder" class="form-control"
                                                                value="{{$row->ip_server}}">
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-shadow"
                                                    data-dismiss="modal">Close</button>
                                                <button class="btn btn-gradient-01" type="submit">Update Data</button>
                                            </div>
                                            </form>


                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                </div>
                                {{-- END MODAL EDIT --}}

                                @endforeach
                                {{-- @endforelse --}}
                            </tbody>
                        </table>
                        <div style="margin-right: 20px;">
                            <button type="button" class="btn btn-primary ripple mr-1 mb-2"
                                style="float: right;margin-top: 20px;" data-toggle="modal"
                                data-target="#modalTambah">Add New
                            </button>
                        </div>
                    </div>



                    <div id="modalTambah" class="modal fade" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Rdbms</h4>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{ route('InsertRdbms') }}" method="post">
                                        @csrf
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Kode</label>
                                            <div class="col-lg-9">
                                                <input name="code" type="text" placeholder="Kode RDBMS"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">RDBMS Name</label>
                                            <div class="col-lg-9">
                                                <select required name="name" class="custom-select form-control">
                                                    <option>MySQL</option>
                                                    <option>Oracle</option>
                                                    <option>PostgreSQL</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Version</label>
                                            <div class="col-lg-9">
                                                <input required name="version" type="text" placeholder="Versi RDBMS"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">IP Server</label>
                                            <div class="col-lg-9">
                                                <input required name="ip_server" type="text" placeholder="IP Server"
                                                    class="form-control">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                                    <button class="btn btn-gradient-01" type="submit">Add Data</button>
                                </div>
                                </form>
                            </div>
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
<script>
    $(document).on('click','.deleteUser',function(){
    var userID=$(this).attr('data-userid');
    $('#rdbms_id').val(userID); 
    $('#applicantDeleteModal').modal('show'); 
});
</script>


@endsection