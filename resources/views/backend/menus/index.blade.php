@extends('backend.layouts.app')
@section('title', 'Admin | menu')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Menu</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item active">Index</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title mb-0">Menu List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>Menu Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Create Menu</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form action="{{ route('menus.store') }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="fullName" class="form-label">Display
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="fullName"
                                                                    placeholder="Enter display name" name="display_name"
                                                                    value="{{ old('display_name') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Url</label>
                                                                <input type="text" class="form-control" id="emailInput"
                                                                    placeholder="Enter url" name="url"
                                                                    value="{{ old('url') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Sequence</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Seqence" name="sequence"
                                                                    value="{{ old('sequence') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput"
                                                                    class="form-label">Childable?</label>
                                                                <select class="form-select mb-3"
                                                                    aria-label="Default select example" name="childable"
                                                                    value="{{ old('childable') }}">
                                                                    <option value="1">Y</option>
                                                                    <option value="0">N</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="C4S">Is Active?</label>
                                                                <div class="controls">
                                                                    <select name="status" id=""
                                                                        class="form-control">
                                                                        <option value="" selected disabled hidden>
                                                                            --Select
                                                                            One--</option>
                                                                        <option value="1">Active</option>
                                                                        <option value="0">Inactive</option>
                                                                    </select>
                                                                </div>
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
                                            <th data-ordering="false">Display Name</th>
                                            <th data-ordering="false">Url</th>
                                            <th data-ordering="false">Seq</th>
                                            <th data-ordering="false">Childable?</th>
                                            <th data-ordering="false">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $menu->display_name }}</td>
                                                <td>{{ $menu->url }}</td>
                                                <td>{{ $menu->sequence }}</td>
                                                <td>{{ $menu->childable == 1 ? 'Yes' : 'NO' }}</td>
                                                <td>{{ $menu->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a class="edit-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal{{ $menu->id }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                    <a class="remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete-modal{{ $menu->id }}"><i
                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                    <div class="modal fade" id="delete-modal{{ $menu->id }}"
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
                                                                            action="{{ route('menus.destroy', $menu->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <input type="hidden" name="menu_id"
                                                                                value="{{ $menu->id }}">
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
                                                    <div id="edit-modal{{ $menu->id }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-modal="true"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0 overflow-hidden">
                                                                <div class="modal-header p-3">
                                                                    <h4 class="card-title mb-0">Edit menu</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <form action="{{ route('menus.update', $menu->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == $menu->id)
                                                                            @include('backend.layouts.flash-message')
                                                                        @endif
                                                                        <div class="mb-3">
                                                                            <label for="fullName"
                                                                                class="form-label">Display
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="fullName"
                                                                                placeholder="Enter display name"
                                                                                name="display_name"
                                                                                value="{{ old('display_name', $menu->display_name) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Url</label>
                                                                            <input type="text" class="form-control"
                                                                                id="emailInput" placeholder="Enter url"
                                                                                name="url"
                                                                                value="{{ old('url', $menu->url) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Sequence</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Seqence" name="sequence"
                                                                                value="{{ old('sequence', $menu->sequence) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Childable?</label>
                                                                            <select class="form-select mb-3"
                                                                                aria-label="Default select example"
                                                                                name="childable"
                                                                                value="{{ old('childable') }}">
                                                                                <option
                                                                                    {{ $menu->childable == '1' ? 'selected' : '' }}
                                                                                    value="1">Y</option>
                                                                                <option
                                                                                    {{ $menu->childable == '0' ? 'selected' : '' }}
                                                                                    value="0">N</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="C4S">Is Active?</label>
                                                                            <div class="controls">
                                                                                <select name="status" id=""
                                                                                    class="form-control">
                                                                                    <option value="" selected
                                                                                        disabled hidden>
                                                                                        --Select
                                                                                        One--</option>
                                                                                    <option
                                                                                        {{ $menu->status == 1 ? 'selected' : '' }}
                                                                                        value="1">Active</option>
                                                                                    <option
                                                                                        {{ $menu->status == 0 ? 'selected' : '' }}
                                                                                        value="0">Inactive
                                                                                    </option>
                                                                                </select>
                                                                            </div>
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
                                                    @if (!empty(Session::get('error_code')) && Session::get('error_code') == $menu->id)
                                                        <script>
                                                            $(function() {
                                                                $('#edit-modal{{ $menu->id }}').modal('show');
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
