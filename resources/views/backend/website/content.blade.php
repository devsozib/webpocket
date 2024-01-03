@extends('backend.layouts.app')
@section('title', 'Admin | Website Content')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Website Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Website Content</a></li>
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
                                        <h5 class="card-title mb-0">Website Content</h5>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false" tabindex="-1">Download Pocket Section</a>
                                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">POCKET SERVICES Section</a>
                                            <a class="nav-link mb-2 " id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="true">WHO WE ARE Section</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">Customer Proud Section</a>
                                            <a class="nav-link" id="v-pills-secure-payments-tab" data-bs-toggle="pill" href="#v-pills-secure-payments" role="tab" aria-controls="v-pills-secure-payments" aria-selected="false" tabindex="-1">Secure Payment Section</a>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-9">
                                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <form class="w-px-500 p-3 p-md-3" action="{{ route('website.content.update') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH') 
                                                <input type="hidden" name="type" value="AD"> 
                                              <div class="mb-3">
                                                <label for="emailInput" class="form-label">Title</label>
                                                <input type="text" class="form-control"
                                                        placeholder="Type Title" name="title"
                                                        value="{{ old('title',getAppDev()->title) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">
                                                        Description</label>
                                                    <textarea rows="6" id="adeditor" placeholder="Type description" class="form-control" name="description">{{ old('description',getAppDev()->description) }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="emailInput"
                                                        class="form-label">Image(Dimension: 404x867)</label>
                                                    <input type="file" class="form-control"
                                                        name="image" id="download_img">
                                                </div>
                                           
                                                    <div id="image_sec">
                                                        <div class="form-group">
                                                            <img style="width:200px; border-radius:10px"
                                                                id="download_image_preview"
                                                                src="{{ asset('frontend/assets/img/app/' . getAppDev()->img) }}"
                                                                alt="Preview">
                                                        </div>
                                                    </div>
                                                
                                             
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
                                                               {{ getAppDev()->status ==  '1'?'selected':'' }}
                                                                value="1">Active</option>
                                                            <option
                                                            {{ getAppDev()->status ==  '0'?'selected':'' }}
                                                                value="0">Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit"
                                                        class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <form class="w-px-500 p-3 p-md-3" action="{{ route('website.content.update') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH') 
                                                    <input type="hidden" name="type" value="PS"> 
                                                  <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control"
                                                            placeholder="Type Title" name="title"
                                                            value="{{ old('title',getPS()->title) }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">
                                                            Description</label>
                                                        <textarea rows="6" id="pseditor" placeholder="Type description" class="form-control pseditor" name="description">{{ old('description',getPS()->description) }}</textarea>
                                                    </div>
                                                    
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
                                                               {{ getAppDev()->status ==  '1'?'selected':'' }}
                                                                value="1">Active</option>
                                                            <option
                                                            {{ getAppDev()->status ==  '0'?'selected':'' }}
                                                                value="0">Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <form class="w-px-500 p-3 p-md-3" action="{{ route('website.content.update') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH') 
                                                    <input type="hidden" name="type" value="AP"> 
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Title</label>
                                                        <input type="text" class="form-control"
                                                                placeholder="Type Title" name="title"
                                                                value="{{ old('title',getAP()->title) }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">
                                                            Description</label>
                                                        <textarea rows="6" id="adeditor" placeholder="Type description" class="form-control" name="description">{{ old('description',getAP()->description) }}</textarea>
                                                    </div>
    
                                                    <div class="mb-3">
                                                        <label for="emailInput"
                                                            class="form-label">Image(Dimension: 996x664)</label>
                                                        <input type="file" class="form-control"
                                                            name="image" id="about_img">
                                                    </div>
                                                    <div class="mb-3">
                                                    <div id="image_sec">
                                                        <div class="form-group">
                                                            <img style="width:200px; border-radius:10px"
                                                                id="about_img_preview"
                                                                src="{{ asset('frontend/assets/img/about/' . getAP()->img) }}"
                                                                alt="Preview">
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">List(Separate by comma)</label>
                                                        <input type="text" class="form-control"
                                                                placeholder="Eg:Item1,item2" name="lists"
                                                                value="{{ old('lists',getAP()->list) }}">
                                                    </div>
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
                                                                   {{ getAP()->status ==  '1'?'selected':'' }}
                                                                    value="1">Active</option>
                                                                <option
                                                                {{ getAP()->status ==  '0'?'selected':'' }}
                                                                    value="0">Inactive
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <form class="w-px-500 p-3 p-md-3" action="{{ route('website.content.update') }}" method="post" enctype="multipart form-data">
                                                    @csrf
                                                    @method('PATCH')  
                                                    <input type="hidden" name="type" value="CP"> 
                                                  <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control"
                                                            placeholder="Type Title" name="title"
                                                            value="{{ getCP()->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">
                                                            Description</label>
                                                        <textarea placeholder="Type description" class="form-control" name="description">{{ getCP()->description }}</textarea>
                                                    </div>
    
                                                    <div class="mb-3">
                                                        <label for="emailInput"
                                                            class="form-label">Image</label>
                                                        <input type="file" class="form-control"
                                                            name="image" id="uselectImage">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">List(Separate by comma)</label>
                                                        <input type="text" class="form-control"
                                                                placeholder="Eg:Item1,item2" name="lists"
                                                                value="{{ old('lists',getCP()->list) }}">
                                                    </div>
                                                        <div id="image_sec">
                                                            <div class="form-group">
                                                                <img style="width:200px; border-radius:10px"
                                                                    id="image-preview"
                                                                    src="{{ asset('frontend/assets/img/' . getCP()->img) }}"
                                                                    alt="Preview">
                                                            </div>
                                                        </div>
                                                    {{-- @endif --}}
                                                   
                                                    <div class="mb-3">
                                                        <label for="C4S">Status</label>
                                                        <div class="controls">
                                                            <select name="status" id=""
                                                                class="form-control">
                                                               
                                                                <option
                                                                   {{ getCP()->status ==  '1'?'selected':'' }}
                                                                    value="1">Active</option>
                                                                <option
                                                                {{ getCP()->status ==  '0'?'selected':'' }}
                                                                    value="0">Inactive
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-secure-payments" role="tabpanel" aria-labelledby="v-pills-secure-payments-tab">
                                                <form class="w-px-500 p-3 p-md-3" action="{{ route('website.content.update') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')  
                                                    <input type="hidden" name="type" value="SP">  
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Title</label>
                                                        <input type="text" class="form-control"
                                                                placeholder="Type Title" name="title"
                                                                value="{{ getSP()->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">
                                                            Description</label>
                                                        <textarea placeholder="Type description" class="form-control" name="description">{{ getSP()->description }}</textarea>
                                                    </div>
    
                                                    <div class="mb-3">
                                                        <label for="emailInput"
                                                            class="form-label">Image</label>
                                                        <input type="file" class="form-control"
                                                            name="image" id="secure_paymment_img">
                                                    </div>
                                            
                                                    <div id="image_sec">
                                                        <div class="form-group">
                                                            <img style="width:200px; border-radius:10px"
                                                                id="secure_paymment_img_preview"
                                                                src="{{ asset('frontend/assets/img/' . getSP()->img) }}"
                                                                alt="Preview">
                                                        </div>
                                                    </div>
                                                    {{-- @endif --}}
                                                   
                                                    <div class="mb-3">
                                                        <label for="C4S">Status</label>
                                                        <div class="controls">
                                                            <select name="status" id=""
                                                                class="form-control">
                                                               
                                                                <option
                                                                   {{ getSP()->status ==  '1'?'selected':'' }}
                                                                    value="1">Active</option>
                                                                <option
                                                                {{ getSP()->status ==  '0'?'selected':'' }}
                                                                    value="0">Inactive
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!--  end col -->
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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Dark Mode Logo Input
        document.getElementById('download_img').addEventListener('change', function() {
            var download_imgInput = this;
            var download_image_preview = document.getElementById('download_image_preview');
            displaySelectedImage(download_imgInput, download_image_preview);
        });
        document.getElementById('about_img').addEventListener('change', function() {
            var about_imgInput = this;
            var about_image_preview = document.getElementById('about_img_preview');
            displaySelectedImage(about_imgInput, about_image_preview);
        });

        document.getElementById('secure_paymment_img').addEventListener('change', function() {
            var sp_imgInput = this;
            var sp_preview = document.getElementById('secure_paymment_img_preview');
            displaySelectedImage(sp_imgInput, sp_preview);
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

            
    })
    </script>


@endsection
