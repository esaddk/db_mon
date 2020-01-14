@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>DB Task</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>CREATOR</th>
                                    <th>INSERT_DATE</th>
                                    <th>RDBMS</th>
                                    <th>PROVISIONING</th>
                                    <th>TROUBLESHOOTING</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            {{-- @forelse($availbilities as $row) --}}



                            <tbody>
                                @foreach ($tasks as $row)
                                <tr>
                                    <td>{{ ucfirst($row->user->name) }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->rdbms }}</td>
                                    <td>{{ $row->provisioning }}</td>
                                    <td>{{ $row->troubleshooting }}</td>

                                    <td class="td-actions">
                                        <a href="{{ route('UpdateTask',$row->id) }}" data-toggle="modal"
                                            data-target="#myModalEdit-{{ $row->id }}"><i
                                                class=" la la-edit edit"></i></a>
                                        <button style="border: none;" class="deleteUser" data-userid="{{$row->id}}">
                                            <i class="la la-close delete"></i></button>
                                    </td>
                                </tr>
                                <div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1"
                                    role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog" style="width:55%;">
                                        <div class="modal-content">
                                            <form action="{{route('DeleteTask')}}" method="POST"
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
                                                    <input type="hidden" , name="task_id" id="task_id">
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
                                                <h4 class="modal-title">Edit Task</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="{{ route('UpdateTask', $row->id) }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('put') }}
                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Creator</label>
                                                        <div class="col-lg-9">
                                                            {{-- <input name="user_id" type="text" placeholder="placeholder"
                                                                class="form-control" value="{{$row->user_id}}"> --}}

                                                            <select class="form-control" name="user_id">

                                                                <option value="{{ $row->user->id }}">
                                                                    {{ ucfirst($row->user->name) }}</option>
                                                                @foreach ($users as $rows)
                                                                <option value="{{ $rows->id }}">
                                                                    {{ ucfirst($rows->name) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">RDBMS</label>
                                                        <div class="col-lg-9">
                                                            <select name="rdbms" class="custom-select form-control">
                                                                <option>{{$row->rdbms}}</option>
                                                                <option>MySQL</option>
                                                                <option>Oracle</option>
                                                                <option>PostgreSQL</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">PROVISIONING</label>
                                                        <div class="col-lg-9">
                                                            <input name="provisioning" type="number" required
                                                                placeholder="provisioning" class="form-control"
                                                                value="{{$row->provisioning}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label
                                                            class="col-lg-3 form-control-label">TROUBLESHOOTING</label>
                                                        <div class="col-lg-9">
                                                            <input name="troubleshooting" type="number" required
                                                                placeholder="troubleshooting" class="form-control"
                                                                value="{{$row->troubleshooting}}">
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


                    {{-- Start Modal Tambah --}}
                    <div id="modalTambah" class="modal fade" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Task</h4>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{ route('InsertTask') }}" method="post">
                                        @csrf
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Creator</label>
                                            <div class="col-lg-9">
                                                {{-- {!! Form::Label('item', 'Item:') !!} --}}

                                                <select class="form-control" name="user_id">
                                                    @foreach ($users as $row)
                                                    <option value="{{$row->id}}">{{ucfirst($row->name)}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">RDBMS</label>
                                            <div class="col-lg-9">
                                                <select name="rdbms" class="custom-select form-control">
                                                    <option>MySQL</option>
                                                    <option>Oracle</option>
                                                    <option>PostgreSQL</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">PROVISIONING</label>
                                            <div class="col-lg-9">
                                                <input name="provisioning" type="number" required
                                                    placeholder="provisioning" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">TROUBLESHOOTING</label>
                                            <div class="col-lg-9">
                                                <input name="troubleshooting" type="number" required
                                                    placeholder="troubleshooting" class="form-control">
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
                    {{-- End MOdal tambah --}}


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
    $('#task_id').val(userID); 
    $('#applicantDeleteModal').modal('show'); 
});
</script>

@endsection