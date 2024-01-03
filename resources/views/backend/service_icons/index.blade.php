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
                            <h4 class="mb-sm-0">Service Icons</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Service Icons</a>
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
                                        <h5 class="card-title mb-0">Service Icons List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>Service Icons Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Service Icons</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form class="w-px-500 p-3 p-md-3"
                                                            action="{{ route('service-icons.store') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">
                                                                    Services</label>
                                                                <select class="form-select mb-3" name="submenu_id">
                                                                    <option selected hidden value="">Select Service
                                                                    </option>
                                                                    @foreach ($services as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->display_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Dispaly
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Display Name" name="display_name"
                                                                    value="{{ old('display_name') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Sequence</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Seqence" name="sequence"
                                                                    value="{{ old('sequence') }}">
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
                                            <th data-ordering="false">Display Name</th>
                                            <th data-ordering="false">Sub Menu Name</th>
                                            <th data-ordering="false">Sequence</th>
                                            <th data-ordering="false">Url</th>
                                            <th data-ordering="false">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($serviceIcons as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img style="width: 100px"
                                                        src="{{ url('public/frontend/assets/img/menu_icon/', $item->image) }}"
                                                        alt=""></td>
                                                <td>{{ $item->display_name }}</td>
                                                <td>{{ $item->submenu_id }}</td>
                                                <td>{{ $item->sequence }}</td>
                                                <td>{{ $item->url }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            {{ $item->status == 1 ? 'checked' : '' }} role="switch"
                                                            id="flexSwitchCheckChecked">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="edit-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal{{ $item->id }}"><i
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
                                                                            action="{{ route('service-icons.destroy', $item->id) }}"
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
                                                    <div id="edit-modal{{ $item->id }}" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-modal="true"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0 overflow-hidden">
                                                                <div class="modal-header p-3">
                                                                    <h4 class="card-title mb-0">Edit
                                                                        Menu Icon</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form class="w-px-500 p-3 p-md-3"
                                                                        action="{{ route('service-icons.update', $item->id) }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <div class="mb-3">
                                                                            <label for="emailInput" class="form-label">
                                                                                Services</label>
                                                                            <select class="form-select mb-3"
                                                                                name="submenu_id">
                                                                                <option selected hidden value="">
                                                                                    Select Service
                                                                                </option>
                                                                                @foreach ($services as $sitem)
                                                                                    <option
                                                                                        {{ $sitem->id == $item->submenu_id ? 'selected' : '' }}
                                                                                        value="{{ $sitem->id }}">
                                                                                        {{ $sitem->display_name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Dispaly
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Display Name"
                                                                                name="display_name"
                                                                                value="{{ old('display_name', $item->display_name) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Sequence</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Seqence" name="sequence"
                                                                                value="{{ old('sequence', $item->sequence) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="emailInput"
                                                                                class="form-label">Image</label>
                                                                            <input type="file" class="form-control"
                                                                                name="image" id="uselectImage">
                                                                            {{-- <img id="upreview" src="#"
                                                                                alt="your image" class="mt-3"
                                                                                style="display:none; width:200px" /> --}}
                                                                        </div>
                                                                        @if ($item->image)
                                                                            <div id="image_sec">
                                                                                <div class="form-group">
                                                                                    <label for="Name">Icon
                                                                                        Image</label>
                                                                                    <img style="width:200px; border-radius:10px"
                                                                                        id="image-preview"
                                                                                        src="{{ url('public/frontend/assets/img/menu_icon/', $item->image) }}"
                                                                                        alt="Preview">
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        <div class="mb-3">
                                                                            <label for="C4S">Status</label>
                                                                            <div class="controls">
                                                                                <select name="status" id=""
                                                                                    class="form-control">
                                                                                    <option value="" selected
                                                                                        disabled hidden>
                                                                                        --Select
                                                                                        One--</option>
                                                                                    <option
                                                                                        {{ $item->status == '1' ? 'selected' : '' }}
                                                                                        value="1">Active</option>
                                                                                    <option
                                                                                        {{ $item->status == '0' ? 'selected' : '' }}
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#menu_select').on('change', function() {
                var menu_id = $(this).val();
                if (menu_id) {
                    $.ajax({
                        url: '{{ url('getSubmenu') }}',
                        type: 'GET',
                        data: {
                            'menu_id': menu_id
                        },
                        success: function(data) {
                            console.log(data[1].childable);
                            if (data[1].childable == '1') {
                                $('#sub_menu_sec').removeClass('d-none');
                                $('#sub_menu').empty();
                                $('#sub_menu').append(
                                    '<option selected disabled value="">--Select SubMenu--</option>'
                                );
                                $.each(data[0], function(index, sub_menus) {

                                    $('#sub_menu').append('<option value="' +
                                        sub_menus.id + '">' + sub_menus
                                        .display_name +
                                        '</option>');
                                });
                            } else {
                                $('#sub_menu_sec').addClass('d-none');
                            }

                        }
                    });
                } else {
                    $('#sub_menu').empty();
                    $('#sub_menu').append('<option value="" selected disabled>--Select SubMenu--</option>');
                }
            });
        });

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
