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
                            <h4 class="mb-sm-0">Offers</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Offers</a>
                                    </li>
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
                                        <h5 class="card-title mb-0">Offers List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>Offers Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Offers</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form class="w-px-500 p-3 p-md-3"
                                                            action="{{ route('offer.store') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Offer
                                                                    Title</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="title" name="title"
                                                                    value="{{ old('title') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Offer
                                                                    Description</label>
                                                                <textarea placeholder="offer description" class="form-control" name="offer_description">{{ old('offer_description') }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="offer"
                                                                    class="form-label">Offer(Optional)</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Offer" value="{{ old('offer') }}"
                                                                    name="offer" id="offer">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="validity"
                                                                    class="form-label">Validity(Optional)</label>
                                                                <input type="date" placeholder="validity"
                                                                    class="form-control" value="{{ old('validity') }}"
                                                                    name="validity" id="validity">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="can_avail" class="form-label">Can
                                                                    Avail(Optional)</label>
                                                                <input type="text" placeholder="can avail"
                                                                    class="form-control" value="{{ old('can') }}"
                                                                    name="can_avail" id="can_avail">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Campaign Details
                                                                </label>
                                                                <textarea class="form-control ckeditor-classic" name="camp_details">{{ old('camp_details') }}</textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Image</label>
                                                                <input type="file" class="form-control" name="image"
                                                                    id="selectImage">
                                                                <img id="preview" src="#" alt="your image"
                                                                    class="mt-3" style="display:none; width:200px" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="C4S">Status</label>
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
                                            <th data-ordering="false">Image</th>
                                            <th data-ordering="false">Title</th>
                                            <th data-ordering="false">Offer</th>
                                            <th data-ordering="false">Validity</th>
                                            <th data-ordering="false">Can Avail</th>
                                            <th data-ordering="false">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($offers as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img style="width: 100px"
                                                        src="{{ url('public/frontend/assets/img/offer/', $item->thumb_image) }}"
                                                        alt=""></td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->offer ? $item->offer : 'N/A' }}</td>
                                                <td>{{ $item->validity ? $item->validity : 'N/A' }}</td>
                                                <td>{{ $item->can_avail ? $item->can_avail : 'N/A' }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            {{ $item->status == 1 ? 'checked' : '' }} role="switch"
                                                            id="flexSwitchCheckChecked">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="edit-item-btn"
                                                        href="{{ route('offer.edit', $item->id) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                    <a class="remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete-modal{{ $item->id }}"><i
                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                    <div class="modal fade" id="delete-modal{{ $item->id }}"
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
                                                                            action="{{ route('offer.destroy', $item->id) }}"
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
    <script type="text/javascript">
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }

        $('#uselectImage').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image_sec').removeClass('d-none');
                $('#image-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        })
    </script>
@endsection
