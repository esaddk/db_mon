@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Manage User</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th><span style="width:100px;">ROLE</span></th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            {{-- @forelse($availbilities as $user) --}}



                            <tbody>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>@if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">
                                            {{ $v }}
                                        </label>
                                        @endforeach
                                        @endif
                                    </td>

                                    <td class="td-actions">
                                        <a href="{{ route('users.edit',$user->id) }}" data-toggle="modal"
                                            data-target="#myModalEdit-{{ $user->id }}"><i
                                                class=" la la-edit edit"></i></a>

                                        {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                        $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!} --}}
                                        <a onclick="deleteData({{ $user->id }})"><i class="la la-close delete"></i></a>
                                        <script>
                                            $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                                                        }
                                                    });
                                                    function deleteData(id){
                                                        swal.fire({
                                                            title: "Are you sure?",
                                                            text: "Once deleted, you will not be able to recover this imaginary file!",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                $.ajax({
                                                                    url : "{{ url('DeleteUser')}}" + id,
                                                                    // type : "DELETE",
                                                                    data : {'_method' : 'DELETE',_token: '{!! csrf_token() !!}',},
                                                                    success: function(){
                                                                        localStorage.setItem("swal",
                                                                        swal.fire({
                                                                        title: "Success!",
                                                                        text: "Message sent",
                                                                        type: "success",
                                                                        timer: 5000,
                                                                        showConfirmButton: false
                                                                        })
                                                                        );
                                                                        location.reload();
                                                                        localStorage.getItem("swal");
                                                                    },
                                                                    error : function(){
                                                                        swal.fire({
                                                                            title: 'Opps...',
                                                                            text : 'error deleting data',
                                                                            type : 'error',
                                                                            timer : '1500',
                                                                            
                                                                        })
                                                                    }
                                                                })
                                                            } else {
                                                            swal.fire("Your imaginary file is safe!");
                                                            }
                                                        });
                                                    }
                                        </script>

                                    </td>
                                </tr>
                                {{-- @empty
                                <tr>
                                    <td class="text-center" colspan="7">Tidak ada data transaksi hari ini</td>
                                </tr> --}}
                                <!-- Modal Edit-->
                                <div class="modal fade" style="display: none;" aria-hidden="true"
                                    id="myModalEdit-{{ $user->id }}" aria-labelledby="myModalEdit-{{ $user->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit User</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update',
                                                $user->id]]) !!}

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Name:</strong>
                                                        {!! Form::text('name', null, array('placeholder' =>
                                                        'Name','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Email:</strong>
                                                        {!! Form::text('email', null, array('placeholder' =>
                                                        'Email','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Password:</strong>
                                                        {!! Form::password('password', array('placeholder' =>
                                                        'Password','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Confirm Password:</strong>
                                                        {!! Form::password('confirm-password', array('placeholder'
                                                        => 'Confirm Password','class' => 'form-control'))
                                                        !!}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Role:</strong>
                                                        {!! Form::select('roles[]', $roles,$userRole, array('class'
                                                        => 'form-control','multiple')) !!}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

                                                {!! Form::close() !!}

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
                                    <h4 class="modal-title">Add User</h4>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                        <span class="sr-only">close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' =>
                                            'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            {!! Form::text('email', null, array('placeholder' => 'Email','class' =>
                                            'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            {!! Form::password('password', array('placeholder' => 'Password','class'
                                            => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Confirm Password:</strong>
                                            {!! Form::password('confirm-password', array('placeholder' =>
                                            'Confirm Password','class' => 'form-control'))
                                            !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Role:</strong>
                                            <div style="margin-left:-15px" class="col-md-5">
                                                <div class="dropdown bootstrap-select show-tick show-menu-arrow"><select
                                                        class="selectpicker show-menu-arrow" name="roles[]" multiple=""
                                                        tabindex="-98">
                                                        @foreach ($roles as $row)
                                                        <option value="{{ $row }}">{{ $row}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="dropdown-menu " role="combobox">
                                                        <div class="inner show" role="listbox" aria-expanded="false"
                                                            tabindex="-1">
                                                            <ul class="dropdown-menu inner show"></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
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



@endsection