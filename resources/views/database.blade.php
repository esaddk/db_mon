@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Database</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0 dataTable no-footer">
                            <thead>
                                <tr>
                                    <th>CREATOR</th>
                                    <th>RDBMS</th>
                                    <th>APPLICATION</th>
                                    <th>DB_NAME</th>
                                    <th>SIZE_ALOCATION</th>
                                    <th>DESCRIPTION</th>
                                    <th>CREATED DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            {{-- @forelse($databases as $row) --}}



                            <tbody>
                                @foreach ($databases as $row)
                                <tr>
                                    <td>{{ $row->user->name }}</td>
                                    <td>{{ $row->rdbms->code }}</td>
                                    <td>{{ $row->application->app_name }}</td>
                                    <td>{{ $row->database_name }}</td>
                                    <td>{{ $row->size_alocation }} GB</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->created_at }}</td>

                                    <td class="td-actions">
                                        <a href="{{ route('UpdateDatabase',$row->id) }}" data-toggle="modal"
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
                                            <form action="{{route('DeleteDatabase')}}" method="POST"
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
                                                    <input type="hidden" , name="database_id" id="database_id">
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
                                                <h4 class="modal-title">Edit Database</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="{{ route('UpdateDatabase', $row->id) }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('put') }}
                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Creator</label>
                                                        <div class="col-lg-9">
                                                            {{-- <input name="user_id" type="text" placeholder="placeholder"
                                                                class="form-control" value="{{$row->user_id}}"> --}}
                                                            <option value="{{$row->id}}">{{ucfirst($row->name)}}
                                                            </option>
                                                            <select class="form-control" name="user_id">
                                                                @foreach ($users as $user)
                                                                <option value="{{$user->id}}">{{ucfirst($user->name)}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">RDBMS</label>
                                                        <div class="col-lg-9">
                                                            <select class="form-control" name="rdbms_id">
                                                                <option value="{{ $row->rdbms->id }}">
                                                                    {{ ucfirst($row->rdbms->code) }}</option>
                                                                @foreach ($rdbms as $db)
                                                                <option value="{{$db->id}}">{{ucfirst($db->code)}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Application</label>
                                                        <div class="col-lg-9">
                                                            <select class="form-control" name="application_id">
                                                                <option value="{{ $row->application->id }}">
                                                                    {{ ucfirst($row->application->app_name) }}</option>
                                                                @foreach ($applications as $app)
                                                                <option value="{{$app->id}}">{{ucfirst($app->app_name)}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Database</label>
                                                        <div class="col-lg-9">
                                                            <input name="database_name" type="text"
                                                                placeholder="Nama Database" class="form-control"
                                                                value="{{$row->database_name}}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Size
                                                            Alocation</label>
                                                        <div class="col-lg-9">
                                                            <input name="size_alocation" type="text"
                                                                placeholder="Alokasi Ukuran DB (dalam GB)"" class="
                                                                form-control" value="{{$row->size_alocation}}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                        <label class="col-lg-3 form-control-label">Description</label>
                                                        <div class="col-lg-9">
                                                            <input name="description" type="text"
                                                                placeholder="Deskripsi" class="form-control"
                                                                value="{{$row->description}}">
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

                    @if (count($errors) > 0)
                    <script>
                        $( document ).ready(function() {
                            $('#modalTambah').modal('show');
                        });
                    </script>
                    @endif

                    <div id="modalTambah" class="modal fade" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Database</h4>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{ route('InsertDatabase') }}" method="post">
                                        @csrf
                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Creator</label>
                                            <div class="col-lg-9">
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
                                                <select class="form-control" name="rdbms_id">
                                                    @foreach ($rdbms as $row)
                                                    <option value="{{$row->id}}">{{ucfirst($row->code)}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Application</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="application_id">
                                                    @foreach ($applications as $row)
                                                    <option value="{{$row->id}}">{{ucfirst($row->app_name)}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Database Name</label>
                                            <div class="col-lg-9">
                                                <input name="database_name" type="text" placeholder="Nama Database"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Size Alocation</label>
                                            <div class="col-lg-9">
                                                <input name="size_alocation" type="text"
                                                    placeholder="Alokasi Ukuran DB (dalam GB)" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex align-items-center mb-5">
                                            <label class="col-lg-3 form-control-label">Description</label>
                                            <div class="col-lg-9">
                                                <input name="description" type="text" placeholder="Keterangan"
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

<script src="{{ asset('elis/assets/vendors/js/base/jquery.min.js') }}"></script>
<script src="{{ asset('elis/assets/vendors/js/base/core.min.js') }}"></script>
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
    $('#database_id').val(userID); 
    $('#applicantDeleteModal').modal('show'); 
});
</script>


@endsection