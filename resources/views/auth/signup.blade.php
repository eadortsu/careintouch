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
          <form class="loginForm" action="{{ route('signup') }}" method="post">
            <br><br>
            @csrf
            <div class="logo">
              <img src="./assets/images/logo.png" alt="logo"  >
            </div>
            <!-- Heading -->
            <h1 class="signIn text-center mb-3">
              Sign Up
            </h1>
                        <!-- Name address -->
                        <div class="form-group">

                          <!-- Label -->
                          <label class="form-label">
                           Name
                          </label>
            
                          <!-- Input -->
                          <input type="text" name="name" class="form-control @error('name') border border-danger @enderror" placeholder="John Doe" value="{{ old('name') }}">
                          @error('name') 
                          <div class="text-danger">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label class="form-label">
                Email Address
              </label>

              <!-- Input -->
              <input type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="name@address.com" value="{{ old('email') }}">
              @error('email') 
              <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label class="form-label">
                    Password
                  </label>

                </div>
                <div class="col-auto">

                </div>
              </div> <!-- / .row -->
              

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input class="form-control @error('email') border border-danger @enderror" type="password" name="password"placeholder="Enter your password">

                <!-- Icon -->
                <span class="input-group-text @error('email') border border-danger @enderror">
                  <i class="fe fe-eye"></i>
                </span>
              </div>
              @error('password') 
              <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <!-- Repeat Password -->
            <div class="form-group">
              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label class="form-label">
                    Repeat Password
                  </label>

                </div>
                <div class="col-auto">

                </div>
              </div> <!-- / .row -->
              

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm your password">

                <!-- Icon -->
                <span class="input-group-text">
                  <i class="fe fe-eye"></i>
                </span>

              </div>
              @error('password_confirmation') 
              <div class="text-danger">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Sign Up
            </button>

            <div class="d-flex justify-content-between">
              <!-- Help text -->
              
              <!-- Help text -->
              <a href="#" class="form-text small float-right text-decoration-underline link-primary">
                Sign In
              </a>
            </div>
            <br><br><br><br>

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