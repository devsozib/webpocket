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
                            <h4 class="mb-sm-0">FAQ</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">FAQ</a></li>
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
                                        <h5 class="card-title mb-0">FAQ List</h5>
                                    </div>
                                    <div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#add-modal"
                                            class="btn btn-secondary btn-animation waves-effect waves-light"
                                            data-text="Click"><span>FAQ Create</span></button>

                                        <div id="add-modal" class="modal fade" tabindex="-1" style="display: none;"
                                            aria-modal="true" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0 overflow-hidden">
                                                    <div class="modal-header p-3">
                                                        <h4 class="card-title mb-0">Create FAQ</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (!empty(Session::get('error_code')) && Session::get('error_code') == 'Add')
                                                            @include('backend.layouts.flash-message')
                                                        @endif
                                                        <form action="{{ route('faqs.store') }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <input type="hidden" name="menu_id" value="9">
                                                                <label for="emailInput" class="form-label">Menu</label>
                                                                <select disabled class="form-select mb-3" aria-label="Default select example" value="{{ old('menu_id') }}" id="menu_select">
                                                                    <option  value="9">FAQ
                                                                    </option>
                                                                   
                                                                </select>
                                                            </div>
                                                            <div class="mb-3" id="sub_menu_sec">
                                                                <label for="emailInput" class="form-label">Sub Menu</label>
                                                                <select class="form-select mb-3" aria-label="Default select example" id="sub_menu" name="submenu_id" value="{{ old('submenu_id') }}">
                                                                    <option value="" selected>--Select One--</option>
                                                                    @foreach ($sub_menus as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->s_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>         
                                                            <div class="mb-3">
                                                                <label for="fullName" class="form-label">Question</label>
                                                                <input type="text" class="form-control" id="Question" placeholder="FAQ Question" name="question" value="{{ old('question') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="fullName" class="form-label">Answer</label>
                                                                <textarea name="answer"  placeholder="FAQ Answer" class="form-control ckeditor-classic" cols="30" rows="10">{{ old('answer') }}</textarea>
                                                            </div>                                                                                                                                                                       
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Sequence</label>
                                                                <input type="number" class="form-control"
                                                                    placeholder="Seqence" name="sequence"
                                                                    value="{{ old('sequence') }}">
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
                                            <th data-ordering="false">Menu</th>
                                            <th data-ordering="false">Sub Menu</th>
                                            <th>Qustion</th>                                         
                                            <th>Answer</th>                                         
                                            <th data-ordering="false">Seq</th>
                                            <th data-ordering="false">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($faqs as $faq)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $faq->m_name }}</td>
                                                <td>{{ $faq->s_name }}</td>
                                                <td>{{ $faq->question }}</td>
                                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $faq->id }}">
                                                    Answer
                                                   </button>
                                                   <div class="modal fade" id="staticBackdrop{{ $faq->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                     <div class="modal-dialog">
                                                       <div class="modal-content">
                                                         <div class="modal-header">
                                                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Faq Answer</h1>
                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                         </div>
                                                         <div class="modal-body">
                                                           {{ $faq->answer }}
                                                         </div>
                                                         <div class="modal-footer">
                                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                                                          
                                                         </div>
                                                       </div>
                                                     </div>
                                                 </td>
                                                <td>{{ $faq->sequence }}</td>
                                                
                                              
                                                  
                                                <td>{{ $faq->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a class="edit-item-btn" href="{{ route('faqs.edit',$faq->id) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>Edit</a>
                                                    &nbsp;
                                                    <a class="remove-item-btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete-modal{{ $faq->id }}"><i
                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>Delete</a>
                                                    <div class="modal fade" id="delete-modal{{ $faq->id }}"
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
                                                                            action="{{ route('faqs.destroy', $faq->id) }}"
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
     
    </script>

@endsection
