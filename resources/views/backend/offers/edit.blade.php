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
                                        <form class="w-px-500 p-3 p-md-3" action="{{ route('offer.update', $item->id) }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">

                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Offer
                                                            Title</label>
                                                        <input type="text" class="form-control" placeholder="title"
                                                            name="title" value="{{ old('title', $item->title) }}">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Offer
                                                            Description</label>
                                                        <textarea placeholder="offer description" class="form-control" name="offer_description">{{ old('offer_description', $item->offer_description) }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="offer" class="form-label">Offer(Optional)</label>
                                                        <input type="text" class="form-control" placeholder="Offer"
                                                            value="{{ old('offer', $item->offer) }}" name="offer"
                                                            id="offer">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="validity" class="form-label">Validity(Optional)</label>
                                                        <input type="date" placeholder="validity" class="form-control"
                                                            value="{{ old('validity', $item->validity) }}" name="validity"
                                                            id="validity">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="can_avail" class="form-label">Can
                                                            Avail(Optional)</label>
                                                        <input type="text" placeholder="can avail" class="form-control"
                                                            value="{{ old('can_avail', $item->can_avail) }}"
                                                            name="can_avail" id="can_avail">
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            id="selectImage">
                                                        @if ($item->thumb_image)
                                                            <div id="image_sec">
                                                                <div class="form-group">
                                                                    <img style="width:200px; border-radius:10px"
                                                                        id="preview"
                                                                        src="{{ url('public/frontend/assets/img/offer/', $item->thumb_image) }}"
                                                                        alt="Preview">
                                                                </div>
                                                            </div>
                                                        @endif
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
                                                                <option {{ $item->status == '1' ? 'selected' : '' }}
                                                                    value="1">Active</option>
                                                                <option {{ $item->status == '0' ? 'selected' : '' }}
                                                                    value="0">Inactive
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Campaign Details
                                                        </label>
                                                        <textarea class="form-control ckeditor-classic" name="camp_details">{{ old('camp_details', $item->campaign_details) }}</textarea>
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
