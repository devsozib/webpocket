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
                            <h4 class="mb-sm-0">Edit Faq</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Faq</a></li>
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
                                        <h5 class="card-title mb-0">Edit Faq</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'update')
                                            @include('backend.layouts.flash-message')
                                        @endif
                                       
                                        <div class="row">
                                            <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                   <div class="row">
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <label for="questionInput" class="form-label">Question</label>
                                                            <input type="text" class="form-control" id="questionInput" name="question" value="{{ $faq->question }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <label for="sequenceInput" class="form-label">Sequence</label>
                                                            <input type="number" class="form-control" id="sequenceInput" name="sequence" value="{{ $faq->sequence }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <label for="statusSelect" class="form-label">Is Active?</label>
                                                            <select name="status" id="statusSelect" class="form-select">
                                                                <option value="1" {{ $faq->status == 1 ? 'selected' : '' }}>Active</option>
                                                                <option value="0" {{ $faq->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                        </div> 
                                                    </div>                                                    
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="answerTextarea" class="form-label">Answer</label>
                                                            <textarea name="answer" class="form-control ckeditor-classic" cols="30" rows="10">{{ $faq->answer }}</textarea>
                                                        </div>
                                                    </div>
                                                    </div>                                                                                                                                     
                                                   
                                                    
                                                    
                                                                                                  
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
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
