
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: AdminCC ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Font Icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/plugins/aos-animation/aos.css') }}" rel="stylesheet">
<!-- Custom Css -->
<link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
<!-- themes Css -->
<link href="{{ URL::asset('assets/css/themes/all-themes.css') }}" rel="stylesheet" />
<!-- css Login -->
<link href="{{ URL::asset('assets/css/login.css') }}" rel="stylesheet">

</head>
<body class="theme-red">
@yield('navbar')
<section>
@yield('leftbar')
</section>
<section class="content">
@yield('content')
</section>
<!-- Jquery Core Js --> 
<script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script> <!-- JVectorMap Plugin Js --> 
<script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script> <!-- JVectorMap Plugin Js --> 
<script src="{{ URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ URL::asset('assets/plugins/jquery-countto/jquery.countTo.js')}}"></script> <!-- Jquery CountTo Plugin Js --> 
<script src="{{ URL::asset('assets/bundles/flotscripts.bundle.js')}}"></script><!-- Flot Charts Plugin Js --> 
<script src="{{ URL::asset('assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{ URL::asset('assets/plugins/aos-animation/aos.js')}}"></script> <!-- AOS Animation -->
<script src="{{ URL::asset('assets/js/pages/index.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/maps/jvectormap.js')}}"></script> 
<script src="{{ URL::asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
<!-- Jquery Core Js --> 
<script src="{{ URL::asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ URL::asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{ URL::asset('assets/plugins/css-gradientify/gradientify.min.js')}}"></script><!-- Gradientify Js -->
<script src="{{ URL::asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
@yield('scripts')
</body>
</html>