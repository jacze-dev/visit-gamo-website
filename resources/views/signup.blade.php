<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('/css/signup.css')}}">
   <style>
      .error{
         color: red !important;
         font-size: 12px !important;
         height: 5px;
      }
   </style>
   <title>sign up</title>
</head>
<body>
   <div class="container1">
      <div class="login">
         <p>sign up</p>
         <form class="login-form" method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <span class="first-name">    <input type="text" name="first_name" id="" placeholder="First Name"></span>
            @error('first_name')
            <p class="error">{{$message}}</p>
            @enderror
             

            <span class="last-name">    <input type="text" name="last_name" id="" placeholder="Last Name"></span>
            @error('last_name')
            <p class="error">{{$message}}</p>
            @enderror
        <span class="email">    <input type="Email" name="email" id="" placeholder="email..."></span>
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
        <span class="pass">    <input type="password" name="password" id="password" placeholder="Password" > <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i></span>
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
        <span class="pass">    <input type="password" name="password_confirmation" id="password1" placeholder="Confirm Password" > <i class="far fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i></span>

        <div class="photo">
         <figure class="image-container">
            <img class="choosen-pic" id="chosen-photo"  >
            <figcaption id="file-name">

            </figcaption>
         </figure>
         
          <input class="file-input" id="upload-button" type="file" accept="image/*" name="image">
          <label for="upload-button" class="pic-btn"><i class="fa-solid fa-upload"></i>Choose Photo</label>
          @error('photo')
          <p class="error">{{$message}}</p>
          @enderror
      </div>

        
         <input class="submit" type="submit" value="SIGNUP"></span>
         </form>
         
         <div class="create-acc">
            <a href="{{route('login')}}">Have an account</a>
         </div>
     </div>
   </div>

</body>
<script src="{{asset('/js/signup.js')}}"></script>
<script src="{{asset('/js/password.js')}}"></script>
</html>