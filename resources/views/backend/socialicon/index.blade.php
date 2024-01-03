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
                            <h4 class="mb-sm-0">Social Icon</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Social Icon</a></li>
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
                                        <h5 class="card-title mb-0">Social Icon List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>Social Icon Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Create Social Icon</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form action="{{ route('socialicon.store') }}" method="post">
                                                            @csrf                                                            
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="Enter name" name="name"
                                                                    value="{{ old('name') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="icon" class="form-label">Icon</label>
                                                                <input type="text" class="form-control" id="icon"
                                                                    placeholder="E.g: <i class='ri-facebook-circle-fill'></i>" name="icon"
                                                                    value="{{ old('icon') }}">
                                                                <p><a class="text-link" target="_blank" href="https://remixicon.com/">Icon Here</a></p>
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
                                                                    placeholder="seq" name="seq"
                                                                    value="{{ old('seq') }}">
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
                                            <th data-ordering="false">Name</th>
                                            <th data-ordering="false">Icon</th>
                                            <th data-ordering="false">Url</th>
                                            <th data-ordering="false">Seq</th>
                                            <th data-ordering="false">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($socialIcons as $icon)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $icon->name }}</td>
                                                <td>{{ $icon->icon }}</td>
                                                <td>{{ $icon->url }}</td>
                                                <td>{{ $icon->seq }}</td>
                                                <td>{{ $icon->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a class="edit-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal{{ $icon->id }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                    <a class="remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete-modal{{ $icon->id }}"><i
                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                    <div class="modal fade" id="delete-modal{{ $icon->id }}"
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
                                                                            action="{{ route('socialicon.destroy', $icon->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
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
                                                    <div id="edit-modal{{ $icon->id }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-modal="true"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0 overflow-hidden">
                                                                <div class="modal-header p-3">
                                                                    <h4 class="card-title mb-0">Edit Social Icon</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <form action="{{ route('socialicon.update', $icon->id) }}" method="post">
                                                                        @csrf
                                                                        @method('PUT') <!-- Use PUT or PATCH method for updates -->
                                                                    
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Name</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $icon->name }}">
                                                                        </div>
                                                                    
                                                                        <div class="mb-3">
                                                                            <label for="icon" class="form-label">Icon</label>
                                                                            <input type="text" class="form-control" id="icon" placeholder="E.g: <i class='ri-facebook-circle-fill'></i>" name="icon" value="{{ $icon->icon }}">
                                                                            <p><a class="text-link" target="_blank" href="https://remixicon.com/">Icon Here</a></p>
                                                                        </div>
                                                                    
                                                                        <div class="mb-3">
                                                                            <label for="url" class="form-label">Url</label>
                                                                            <input type="text" class="form-control" id="url" placeholder="Enter url" name="url" value="{{ $icon->url }}">
                                                                        </div>
                                                                    
                                                                        <div class="mb-3">
                                                                            <label for="seq" class="form-label">Sequence</label>
                                                                            <input type="number" class="form-control" id="seq" placeholder="seq" name="seq" value="{{ $icon->seq }}">
                                                                        </div>
                                                                    
                                                                        <div class="mb-3">
                                                                            <label for="C4S">Is Active?</label>
                                                                            <div class="controls">
                                                                                <select name="status" id=""
                                                                                    class="form-control">
                                                                                    <option value="" selected disabled hidden>
                                                                                        --Select
                                                                                        One--</option>
                                                                                    <option {{ $icon->status == '1'?'selected':'' }} value="1">Active</option>
                                                                                    <option {{ $icon->status == '0'?'selected':'' }} value="0">Inactive</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="text-end">
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div>
                                                    @if (!empty(Session::get('error_code')) && Session::get('error_code') == $icon->id)
                                                        <script>
                                                            $(function() {
                                                                $('#edit-modal{{ $icon->id }}').modal('show');
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
