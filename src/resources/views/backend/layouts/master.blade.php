<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/ico" />

    <title>@yield('title', 'Admin')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />

    <link rel="stylesheet" href="{{ url('admin/toast/toastr.min.css') }}" />

    <link rel="stylesheet" href="{{ url('admin/alert/alertify.core.css') }}" />

    <link rel="stylesheet" href="{{ url('admin/alert/alertify.default.css') }}" />

    @yield('before-css')
    <!-- Custom Theme Style -->
    {{-- <link href="{{url('build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{url('build/css/style.css')}}" rel="stylesheet"> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- after css --}}
    @yield('after-css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
            @include('backend.includes.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            @include('backend.includes.nav')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </section>
            <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @include('backend.includes.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    @include('includes.partials.params')

    {{-- <!-- jQuery -->
    <script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap3-editable/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
    <script src="{{url('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ url('vendors/switchery/dist/switchery.min.js')  }}"></script>
    <!-- pusher -->
    <script src="https://js.pusher.com/7.0/pusher.min.js') }}"></script>
    {{-- before script --}}
    @yield('before-script')
    <!-- Custom Theme Scripts -->
    {{-- <script src="{{url('build/js/custom.min.js')}}"></script>
    <script src="{{url('js/common.js')}}"></script> --}}
    {{-- after script --}}
    {{-- <script>
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                ajaxindicatorstart('Loading...');
            },
            complete: function() {
                jQuery('#resultLoading .bg').height('100%');
                jQuery('#resultLoading').fadeOut(300);
                jQuery('body').css('cursor', 'default');
            }
        })

        function ajaxindicatorstart(text) {
            if (jQuery('body').find('#resultLoading').attr('id') != 'resultLoading') {
                jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="{{ url("images/loading.gif") }}"><div>' + text + '</div></div><div class="bg"></div></div>');
            }
            jQuery('#resultLoading').css({
                'width': '100%',
                'height': '100%',
                'position': 'fixed',
                'z-index': '10000000',
                'top': '0',
                'left': '0',
                'right': '0',
                'bottom': '0',
                'margin': 'auto'
            });

            jQuery('#resultLoading .bg').css({
                'background': '#000000',
                'opacity': '0.7',
                'width': '100%',
                'height': '100%',
                'position': 'absolute',
                'top': '0'
            });

            jQuery('#resultLoading>div:first').css({
                'width': '250px',
                'height': '75px',
                'text-align': 'center',
                'position': 'fixed',
                'top': '0',
                'left': '0',
                'right': '0',
                'bottom': '0',
                'margin': 'auto',
                'font-size': '16px',
                'z-index': '10',
                'color': '#ffffff'

            });
            jQuery('#resultLoading .bg').height('100%');
            jQuery('#resultLoading').fadeIn(300);
            jQuery('body').css('cursor', 'wait');
        }

        function notify(message, type) {
            $.notify({
                message: message
            }, {
                type: type
            });
        }
    </script> --}}

    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    {{-- <!-- jQuery K{{ url('nob Chart --> --}}
    <script src="{{ url('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    {{-- <!-- daterang{{ url('epicker --> --}}
    <script src="{{ url('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    {{-- <!-- Tempusdo{{ url('minus Bootstrap 4 --> --}}
    <script src="{{ url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    {{-- <!-- Summerno{{ url('te --> --}}
    <script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    {{-- <!-- overlayS{{ url('crollbars --> --}}
    <script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    {{-- <!-- AdminLTE{{ url(' App --> --}}
    <script src="{{ url('admin/dist/js/adminlte.js') }}"></script>
    {{-- <!-- AdminLTE{{ url(' for demo purposes --> --}}
    <script src="{{ url('admin/dist/js/demo.js') }}"></script>
    {{-- <!-- AdminLTE{{ url(' dashboard demo (This is only for demo purposes) --> --}}
    <script src="{{ url('admin/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ url('admin/alert/alertify.min.js') }}"></script>

    <script src="{{ url('admin/toast/toastr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('after-script')
</body>

</html>
