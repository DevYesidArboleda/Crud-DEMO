<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      body {
        background-image: url("images/register.jpg");
      /*background-color: #cccccc;*/
      }
    </style>

</head>
<body>
    <div>
      @include('front.template.partials.navbar')
      <div class="container">
        <div class="row">
          @include('flash::message')
          @yield('content')
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>