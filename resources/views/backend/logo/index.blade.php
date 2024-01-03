@extends('backend.layouts.app')
@section('title', 'Admin | Logo')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Logo</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Logo</a></li>
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
                                        <h5 class="card-title mb-0">Logo</h5>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="false">Dark Logo</th>
                                            <th data-ordering="false">White Logo</th>
                                            <th data-ordering="false">Favicon</th>
                                            <th data-ordering="false">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                            <tr>
                                              
                                                <td> 
                                                    <img style="width: 150px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->dark_logo }}" alt="">
                                                </td>
                                                <td> 
                                                    <img style="width: 150px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->white_logo }}" alt="">
                                                </td>  
                                                <td> 
                                                    <img style="width: 80px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->favicon }}" alt="">
                                                </td>                                              
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
                                                                    <h4 class="card-title mb-0">Edit Logo</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <form action="{{ route('logo.update',$logo->id) }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PATCH')                                                                        
                                                                       
                                                                        <div class="mb-3">
                                                                            <label for="dark_logo" class="form-label">Dark Mode Logo(970x292)</label>
                                                                            <input type="file" class="form-control" id="dark_logo" name="dark_logo">
                                                                            <img id="dark_logo_image" style="width: 150px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->dark_logo }}" alt="poket logo">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="white_logo" class "form-label">White Mode Logo(970x292)</label>
                                                                            <input type="file" class="form-control" id="white_logo" name="white_logo">
                                                                            <img id="white_logo_image" style="width: 150px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->white_logo }}" alt="poket logo">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="favicon" class "form-label">Favicon(1000x1000)</label>
                                                                            <input type="file" class="form-control" id="favicon" name="favicon">
                                                                            <img id="favicon_image" style="width: 150px" src="{{ asset('frontend') }}/assets/img/logo/{{ $logo->favicon }}" alt="poket favicon">
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
                                                    @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'update')
                                                    <script>
                                                        $(function() {
                                                            $('#edit-modal').modal('show');
                                                        });
                                                    </script>
                                                @endif
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dark Mode Logo Input
            document.getElementById('dark_logo').addEventListener('change', function() {
                var darkLogoInput = this;
                var darkLogoImage = document.getElementById('dark_logo_image');
                displaySelectedImage(darkLogoInput, darkLogoImage);
            });

            // White Mode Logo Input
            document.getElementById('white_logo').addEventListener('change', function() {
                var whiteLogoInput = this;
                var whiteLogoImage = document.getElementById('white_logo_image');
                displaySelectedImage(whiteLogoInput, whiteLogoImage);
            });

              // Favicon
              document.getElementById('favicon').addEventListener('change', function() {
                var favIcon = this;
                var iconImage = document.getElementById('favicon_image');
                displaySelectedImage(favIcon, iconImage);
            });

            // Function to display the selected image
            function displaySelectedImage(input, imageElement) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        imageElement.src = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>
@endsection
