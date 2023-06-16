<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('admin/css/now-ui-dashboard.css?v=1.0.1')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">

        @include('admin.layout.sidebar')

        <div class="main-panel">

            @include('admin.layout.header')

            @yield('content')

            @include('admin.layout.footer')

        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{url('admin/js/core/jquery.min.js')}}"></script>
<script src="{{url('admin/js/core/popper.min.js')}}"></script>
<script src="{{url('admin/js/core/bootstrap.min.js')}}"></script>
<script src="{{url('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="{{url('admin/https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
<!-- Chart JS -->
<script src="{{url('admin/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{url('admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('admin/js/now-ui-dashboard.js?v=1.0.1')}}"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('admin/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>
<script src="{{url('admin/js/custom.js')}}"></script>

</html>