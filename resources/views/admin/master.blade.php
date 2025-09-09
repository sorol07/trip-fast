<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('admin.includes.meta')
    <!-- TITLE -->
    <title>Noa - @yield('title')</title>

    @include('admin.includes.style')
        <!-- SweetAlert include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
<!-- Switcher -->
@include('admin.includes.right-sidebar')
<!-- End Switcher -->
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}admin/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        @include('admin.includes.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('admin.includes.left-sidebar')
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        @yield('body')
        <!-- CONTAINER CLOSED -->
    </div>

    <!-- FOOTER -->
    @include('admin.includes.footer')
    <!-- FOOTER CLOSED -->

</div>
<!-- page -->
@include('admin.includes.script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @if(session('success'))
        <script>
            swal("Success!", "{{ session('success') }}", "success");
        </script>
    @endif

    @if(session('error'))
        <script>
            swal("Error!", "{{ session('error') }}", "error");
        </script>
    @endif

</body>
</html>
