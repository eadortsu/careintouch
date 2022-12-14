<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Payroll Management Syetem." />

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/libs.bundle.css') }}" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/theme.bundle.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">


  <!-- Title -->
  <title>Payroll</title>
</head>

<body class="d-flex align-items-center  border-top border-top-2 border-primary loginBody">

  <!-- CONTENT
    ================================================== -->
  <div class="container-fluid loginBody">
    <div class="row align-items-center justify-content-center ">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
        <img src="./assets/images/Group1825.png" class="signInImageTop pt-3" alt="" srcset="">
        <div class="portalContainer">
         <div class="portalBg">
          <img src="./assets/images/Group1834.png" class="signInImageCenter" alt="" srcset="">
          <h1 class=" text-white portalHeader ml-4 mt-3">Care In Touch</h1> 
          <p class=" text-white portalInfo ml-4"> Web Portal</p>
         </div>
        </div>
        <img src="./assets/images/Group1826.png" class="signInImageBottom pb-3" alt="" srcset="">
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">

        <div class="loginFormBody">
          <!-- Form -->
          <form class="loginForm">

            <div class="logo">
              <img src="./assets/images/logo.png" alt="logo"  >
            </div>
            <!-- Heading -->
            <h1 class="signIn text-center mb-3">
              Password reset
            </h1>
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label class="form-label">
                Email Address
              </label>

              <!-- Input -->
              <input type="email" class="form-control" placeholder="name@address.com">

            </div>

            <!-- Submit -->
            
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Reset Password
            </button>


            <div class="d-flex justify-content-between">
              <!-- Help text -->
              
              <!-- Help text -->
              <a href="index.html" class="form-text small text-decoration-underline link-primary float-right">
                Remember your password?
              </a>
            </div>

          </form>

        </div>

      </div>
    </div> <!-- / .row -->
  </div>


  <!-- Vendor JS -->
  <script src="./assets/js/vendor.bundle.js"></script>

  <!-- Theme JS -->
  <script src="./assets/js/theme.bundle.js"></script>


</body>

</html>