<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/front/bootstrap.css">
    <link rel="stylesheet" href="css/front/animate.css">
    <link rel="stylesheet" href="css/front/owl.carousel.min.css">
    <link rel="stylesheet" href="css/front/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/front/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/front/style.css">

</head>
<body>
  @include('front.template.partials.navbar')
  
  @yield('content')

  @include('front.template.partials.footer')
  
    <!-- Scripts -->
    <script src="js/front/jquery-3.2.1.min.js"></script>
    <script src="js/front/popper.min.js"></script>
    <script src="js/front/bootstrap.min.js"></script>
    <script src="js/front/owl.carousel.min.js"></script>
    <script src="js/front/bootstrap-datepicker.js"></script>
    <script src="js/front/jquery.timepicker.min.js"></script>
    <script src="js/front/jquery.waypoints.min.js"></script>
    <script src="js/front/main.js"></script>
</body>
</html>