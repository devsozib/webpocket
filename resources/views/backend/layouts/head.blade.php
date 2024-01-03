    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="_token" content="{!! csrf_token() !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Ruhul Amin, Roxy">
    <meta name="description" content="ERP Development">
    <meta name="author" content="Ruhul Amin Roxy">
    <title>@yield('title')</title>

    <!-- App favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/img/logo/{{ logo()->favicon }}" />
    <!-- Bootstrap Css -->
    <link href="{{ url('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="{{ url('backend/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- jsvectormap css -->
    <link href="{{ asset('backend/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!--Ck editor -->
    <link href="{{ url('backend/assets/css/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/css/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/css/quill.snow.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- custom Css-->
    <link href="{{ url('backend/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Layout config Js -->
    <script src="{{ url('backend/assets/js/layout.js') }}"></script>

    <!-- custom css -->
    <style type="text/css">
        .card-title {
            font-size: 20px !important;
        }

        .modal-header {
            padding: 7px !important;
        }

        .form-control {
            /*font-size: 13px;
            height: 30px;
            margin: 0px;*/
            padding-left: 7px !important;
            padding-right: 7px !important;
        }

        .custom-header {
            margin-top: -2px;
            margin-bottom: -3px;
        }

        .appsname:hover {
            color: lightskyblue;
        }
    </style>
