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
                            <h4 class="mb-sm-0">Edit Service Tutorial</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Service Tutorial</a></li>
                                    <li class="breadcrumb-item active">Index</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-3">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="card-title mb-0">Edit Service Tutorial</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'update')
                                            @include('backend.layouts.flash-message')
                                        @endif
                                        <form action="{{ route('tutorials.update', $tutorial->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">

                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="C4S">What For?</label>
                                                        <div class="controls">
                                                            <select name="type" id="" class="form-control">
                                                                <option value="" selected disabled hidden>
                                                                    --Select
                                                                    One--</option>
                                                                <option {{ $tutorial->type == 'app' ? 'selected' : '' }}
                                                                    value="app">APP</option>
                                                                <option {{ $tutorial->type == 'ssd' ? 'selected' : '' }}
                                                                    value="ssd">SSD(*123#)
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label">Step
                                                            No</label>
                                                        <input type="number" class="form-control" id="fullName"
                                                            placeholder="Enter Step No" name="step"
                                                            value="{{ old('step', $tutorial->step_no) }}">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="fullName"
                                                            placeholder="Enter title" name="title"
                                                            value="{{ old('title', $tutorial->title) }}">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3" id="sub_menu_sec">
                                                        <label for="emailInput" class="form-label">Select
                                                            Service</label>
                                                        <select class="form-select mb-3" aria-label="Default select example"
                                                            id="sub_menu" name="sub_menu_id"
                                                            value="{{ old('sub_menu_id') }}">
                                                            <option value="" selected disabled>
                                                                --Select One--
                                                            </option>
                                                            @foreach ($sub_menus as $item)
                                                                <option
                                                                    {{ $tutorial->submenu_id == $item->id ? 'selected' : '' }}
                                                                    value="{{ $item->id }}">
                                                                    {{ $item->display_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            id="selectImage">
                                                        <img id="preview"
                                                            src="{{ url('public/frontend/assets/img/tutorials/', $tutorial->image) }}"
                                                            alt="your image" class="mt-3" style="width:200px" />
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="C4S">Status</label>
                                                        <div class="controls">
                                                            <select name="status" id="" class="form-control">
                                                                <option value="" selected disabled hidden>
                                                                    --Select
                                                                    One--</option>
                                                                <option {{ $tutorial->status == '1' ? 'selected' : '' }}
                                                                    value="1">Active</option>
                                                                <option {{ $tutorial->status == '0' ? 'selected' : '' }}
                                                                    value="0">Inactive
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-info">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
    </script>
@endsection
