<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta name="robots" content="">
      <title>Login - CMS</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/img/profiles/favicon.png">
      <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
   </head>
   <body class="account-page">
      <div class="main-wrapper">
         <div class="account-content">
            <div class="login-wrapper">
               <div class="login-content">
              
                  <div class="login-userset">
                  <form action="{{ route('authenticate') }}" method="post">
                  @csrf
                     <div class="login-logo">
                        <img src="{{ asset('/') }}assets/img/profiles/avator1.png" alt="img">
                     </div>
                     <div class="login-userheading">
                        <h3>Sign In</h3>
                        <!-- <h4>Please login to your account</h4> -->
                     </div>
                     <div class="form-login">
                        <label>Email</label>
                        <div class="form-addons">
                           <input type="email" name="email" placeholder="Enter your email address">
                           <img src="{{ asset('/') }}assets/img/icons/mail.svg" alt="img">
                           @error('email')
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-login">
                        <label>Password</label>
                        <div class="pass-group">
                           <input type="password" name="password" class="pass-input" placeholder="Enter your password">
                           <span class="fas toggle-password fa-eye-slash"></span>
                           @error('password')
                              <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-login">
                        <div class="alreadyuser">
                           <!-- <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4> -->
                        </div>
                     </div>
                     <div class="form-login">
                        <input type="submit" class="btn btn-login" value="Sign In">
                     </div>
                     </form>
                  </div>
              
               </div>
               <div class="login-img">
                  <img src="{{ asset('/') }}assets/img/login.jpg" alt="img">
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('/') }}assets/js/jquery-3.6.0.min.js"></script>
      <script src="{{ asset('/') }}assets/js/feather.min.js"></script>
      <script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('/') }}assets/js/script.js"></script>
   </body>
</html>