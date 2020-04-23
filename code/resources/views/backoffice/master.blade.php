<!DOCTYPE html>
<html>
@include('backoffice.header')

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('backoffice.navbar')
        @include('backoffice.sidebar_menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('backoffice.footer')
        <!-- /.footer -->
    </div>
    <!-- ./wrapper -->
    @include('backoffice.footer_script')
</body>

</html>