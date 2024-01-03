@extends('backend.layouts.app')
@section('title', 'Admin | Brand Color')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Brand Color</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Brand Color</a></li>
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
                                        <h5 class="card-title mb-0">Brand Color</h5>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">Primary Color</th>
                                            <th data-ordering="false">Secondary Color</th>
                                            <th data-ordering="false">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                            <tr>
                                              
                                                <td style="background-color: {{ $color->primary_color }}; color:#fff">{{ $color->primary_color }}</td>
                                                <td style="background-color: {{ $color->secondary_color }};">{{ $color->secondary_color }}</td>                                          
                                                <td>
                                                    <a class="edit-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                                                                      
                                                    <div id="edit-modal" class="modal fade"
                                                        tabindex="-1" style="display: none;" aria-modal="true"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0 overflow-hidden">
                                                                <div class="modal-header p-3">
                                                                    <h4 class="card-title mb-0">Edit Brand Color</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <form action="{{ route('brand-color.update',$color->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PATCH')                                                                        
                                                                        <div class="mb-3">
                                                                            <label for="fullName"
                                                                                class="form-label">Primary Color</label>
                                                                            <input type="color" class="form-control"
                                                                                id="primary_color"
                                                                                placeholder="Enter android url"
                                                                                name="primary_color"
                                                                                value="{{ old('primary_color', $color->primary_color) }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="apple_url"
                                                                                class="form-label">Secondary Color</label>
                                                                            <input type="color" class="form-control"
                                                                                id="secondary_color"
                                                                                placeholder="Enter Apple URL"
                                                                                name="secondary_color"
                                                                                value="{{ old('secondary_color',$color->secondary_color) }}">
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
                                           
                                                </td>
                                            </tr>
                                      
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
