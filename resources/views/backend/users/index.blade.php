@extends('backend.layouts.app')
@section('title', 'Admin | User')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Users</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                    <li class="breadcrumb-item active">Index</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        @if (!Session::get('error_code'))
                            @include('backend.layouts.flash-message')
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title mb-0">Users List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>User Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Create User</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form action="{{ route('users.store') }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="fullName" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="fullName"
                                                                    placeholder="Enter your name" name="name"
                                                                    value="{{ old('name') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Email
                                                                    address</label>
                                                                <input type="email" class="form-control" id="emailInput"
                                                                    placeholder="Enter your email" name="email"
                                                                    value="{{ old('email') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Role</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example" name="role_id"
                                                                    value="{{ old('role_id') }}">
                                                                    <option selected="">Select your role </option>
                                                                    @foreach ($roles as $role)
                                                                        <option value="{{ $role->role_id }}">
                                                                            {{ $role->role_name }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="exampleInputPassword1"
                                                                    placeholder="Enter your password" name="password"
                                                                    value="{{ old('password') }}">
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                        <script>
                                                            $(function() {
                                                                $('#add-modal').modal('show');
                                                            });
                                                        </script>
                                                    @endif
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">SR No.</th>
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Email</th>
                                            <th data-ordering="false">Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ role($user->role_id) }}</td>
                                                <td>
                                                    <a class="edit-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal{{ $user->id }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                    <a class="remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete-modal{{ $user->id }}"><i
                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                    <div class="modal fade" id="delete-modal{{ $user->id }}"
                                                        tabindex="-1" aria-modal="true" role="dialog"
                                                        style="display: none;">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body text-center p-5">
                                                                    <div class="mt-4 pt-4">
                                                                        <h4>Are you sure?</h4>
                                                                        <p class="text-muted">Please click the delete
                                                                            button!</p>
                                                                        <form
                                                                            action="{{ route('users.destroy', $user->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <input type="hidden" name="user_id"
                                                                                value="{{ $user->id }}">
                                                                            <button type="submit" class="btn btn-warning"
                                                                                data-bs-target="#secondmodal"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-dismiss="modal">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="edit-modal{{ $user->id }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-modal="true"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0 overflow-hidden">
                                                                <div class="modal-header p-3">
                                                                    <h4 class="card-title mb-0">Edit User</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <form action="{{ route('users.update', $user->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == $user->id)
                                                                            @include('backend.layouts.flash-message')
                                                                        @endif
                                                                        <div class="mb-3">
                                                                            <label for="fullName" class="form-label">Full
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="fullName"
                                                                                placeholder="Enter your name"
                                                                                name="name"
                                                                                value="{{ old('name', $user->name) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Email
                                                                                address</label>
                                                                            <input type="email" class="form-control"
                                                                                id="emailInput"
                                                                                placeholder="Enter your email"
                                                                                name="email"
                                                                                value="{{ old('email', $user->email) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="role_id"
                                                                                class="form-label">Role</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example"
                                                                                name="role_id" id="role_id">
                                                                                <option selected="">Select your role
                                                                                </option>
                                                                                @foreach ($roles as $role)
                                                                                    @if ($role->id == $user->role_id)
                                                                                        <option
                                                                                            value="{{ $role->id }}"
                                                                                            selected>{{ $role->role_name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $role->id }}">
                                                                                            {{ $role->role_name }}</option>
                                                                                    @endif
                                                                                @endforeach

                                                                            </select>
                                                                        </div>
                                                                        <div class="text-end">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    @if (!empty(Session::get('error_code')) && Session::get('error_code') == $user->id)
                                                        <script>
                                                            $(function() {
                                                                $('#edit-modal{{ $user->id }}').modal('show');
                                                            });
                                                        </script>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
