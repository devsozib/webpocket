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
                            <h4 class="mb-sm-0">Edit Breadcrumbs</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Breadcrumbs</a></li>
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
                                        <h5 class="card-title mb-0">Edit Breadcrumbs</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'update')
                                            @include('backend.layouts.flash-message')
                                        @endif
                                        <form class="w-px-500 p-3 p-md-3" action="{{ route('breadcrumbs.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                        
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="fullName" class="form-label">Breadcrumb Title</label>
                                                        <input type="text" class="form-control" id="fullName" placeholder="Enter display name" name="title" value="{{ $item->title }}">
                                                    </div>
                                                </div>
                                        
                                               
                                        
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Breadcrumb Image</label>
                                                        <input type="file" class="form-control" name="image" id="selectImage">                                        
                                                        @if ($item->image)
                                                            <div id="image_sec">
                                                                <div class="form-group">
                                                                    <img style="width:200px; border-radius:10px" id="image-preview" src="{{ url('public/frontend/assets/img/breadcrumb/', $item->image) }}" alt="Preview">
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                        
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="C4S">Status</label>
                                                        <div class="controls">
                                                            <select name="status" id="" class="form-control">
                                                                <option value="" selected disabled hidden>--Select One--</option>
                                                                <option {{ $item->status == '1' ? 'selected' : '' }} value="1">Active</option>
                                                                <option {{ $item->status == '0' ? 'selected' : '' }} value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Breadcrumb Description</label>
                                                        <textarea placeholder="breadcrumb description"  class="form-control ckeditor-classic" name="description">{{ $item->description }}</textarea>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Update Breadcrumb</button>
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
            preview = document.getElementById('selectImage');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }

        $('#selectImage').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image_sec').removeClass('d-none');
                $('#image-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        })
    </script>
@endsection
