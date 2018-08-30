<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema</title>
  <!-- Styles -->
   
  <link rel="stylesheet" href="css/session/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/session/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/session/vendor.bundle.addons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/session/style.css">

</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="label">Nombre</label>
                  <div class="input-group">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Confirm Password</label>
                  <div class="input-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="{{ route('login') }}" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Condiciones</a>
              </li>
              <li>
                <a href="#">Ayuda</a>
              </li>
              <li>
                <a href="#">Terminos</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Sistema eps. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- Scripts -->
  <script src="js/session/vendor.bundle.base.js"></script>
  <script src="js/session/vendor.bundle.addons.js"></script>
  <script src="js/session/off-canvas.js"></script>
  <script src="js/session/misc.js"></script>
</body>
</html>
