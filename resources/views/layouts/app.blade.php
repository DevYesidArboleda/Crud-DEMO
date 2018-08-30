<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema</title>
    <!-- Styles -->

  <link rel="stylesheet" href="/css/session/materialdesignicons.min.css">
  <link rel="stylesheet" href="/css/session/vendor.bundle.base.css">
  <link rel="stylesheet" href="/css/session/vendor.bundle.addons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="/css/session/style.css">

</head>
<body>
  <div class="container-scroller">
    @include('layouts.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.sidebar')
      <div class="main-panel">

        <div class="content-wrapper">
          @include('flash::message')
          @yield('content') 
        </div>

        @include('layouts.footer')
      </div>
    </div>
  </div>
  
  <!-- Scripts -->
  <script src="/js/session/vendor.bundle.base.js"></script>
  <script src="/js/session/vendor.bundle.addons.js"></script>
  <script src="/js/session/off-canvas.js"></script>
  <script src="/js/session/misc.js"></script>
  <script src="/js/session/dashboard.js"></script>
  <script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  </script>
</body>
</html>