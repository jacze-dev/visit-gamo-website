<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

   <link rel="stylesheet" href="{{asset('/css/login.css')}}">
   <title>Log in</title>
   <style>
      .error{
         color: red !important;
         font-size: 11px !important;
         height: 5px !important;
      }
   </style>
</head>
<body>
   <div class="container1">
      <div class="login">
         <p>Have an account?</p>
         <form class="login-form" method="POST" action="{{route('authenticate')}}" >
            @csrf
        <span class="email">    <input type="Email" name="email" id="" placeholder="email..."></span>
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
        <span class="pass">    <input type="password" name="password" id="password" placeholder="password" > <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i></span>
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
        <span><input class="submit" type="submit" value="SIGNIN"></span>
         </form>
         <div class="remember-and-forget">
            <span><input type="checkbox" name="remember" id=""> Remember Me</span>
            <a href="#">Forget Password</a>
         </div>
      <div class="signin-chices">
         <div class="text">
            -or sign in with-
         </div>
         <div class="signin-with">
            <a href="#"><i class="fa-brands fa-google"></i> Google</a>
         </div>
         <div class="create-acc">
            <a href="{{route('signup')}}">create account</a>
         </div>
      </div>
     </div>
   </div>
</body>
<script src="/js/password.js"></script>

</html>