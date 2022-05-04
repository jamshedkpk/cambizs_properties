
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="template_admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template_admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="template_admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="template_admin/assets/images/favicon.png" />
    <style>
      .form-control:focus{
        color:white;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Please LogIn</h3>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                    <label>Email Address:</label>
                    <input type="text" class="form-control p_input" name="email">
                  </div>
                  <div class="form-group">
                    <label>Password:</label>
                    <input type="text" class="form-control p_input" name="password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn w-100">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="{{route('register')}}"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="template_admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="template_admin/assets/js/off-canvas.js"></script>
    <script src="template_admin/assets/js/hoverable-collapse.js"></script>
    <script src="template_admin/assets/js/misc.js"></script>
    <script src="template_admin/assets/js/settings.js"></script>
    <script src="template_admin/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>