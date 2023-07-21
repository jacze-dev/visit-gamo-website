<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     
       <!-- Favicon -->
       <link href="img/favicon.ico" rel="icon">

       <!-- Google Web Fonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
   
       <!-- Font Awesome -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   
       <!-- Libraries Stylesheet -->
       <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
       <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
   
       <!-- Customized Bootstrap Stylesheet -->
       <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/bf54c025ef.css" crossorigin="anonymous">

   <link rel="stylesheet" href="/css/book.css">
   <link rel="stylesheet" href="/css/style.css">
   <title>Book</title>
</head>
<body>
   <div class="container1">
      <div class="container1">
         <div class="lego">
             <p>logo</p>
         </div>
         <nav class="real_nav">
             <ul>
                 <li>
                     <a>
                         <p>Hotel</p>
                     </a>
                 </li>
 
                 <li>
                     <a>
                         <p>Destinations</p>
                     </a>
                 </li>
                 <li>
                     <a>
                         <p>Car rental</p>
                     </a>
                 </li>
                 <li>
                     <a>
                         <p>Shoping</p>
                     </a>
                 </li>
         </nav>
     </div>
   </div>

   <div class="container2">

    <div class="hotel-info">
      
      <div class="hotel-name">
         <h2>{{ $hotel -> hotels}}</h2>
      </div>
      <div class="hotel-slogan">
         <p> We are here to serve you!</p>
      </div>

      <div class="our-services">
         <p>
         {{ $hotel -> detail }}
         </p>
        
      </div>
      <div class="pics">
         <div class="pic">
            <img src="https://ak-d.tripcdn.com/images/0222p120008iljxvyAB0C_R_960_640_R5_D.jpg" alt="img" width="250px" height="200px">
         </div>
         <div class="pic">
            <img src="https://ak-d.tripcdn.com/images/220r180000014fs4g3AA4_R_960_640_R5_D.jpg" alt="img" width="250px" height="200px">
         </div>
          
         
      </div>
      
    </div> 


    
    <div class="room-detail-container">
  <div class="room-info">
    <h1 class="room-title">Deluxe Room</h1>
    <p class="room-description">
        {{$hotel->roomdetail}}
    </p>
    <ul class="room-amenities">
      <li><i class="fas fa-bed"></i> King-sized bed</li>
      <li><i class="fas fa-tv"></i> Flat-screen TV</li>
      <li><i class="fas fa-mineral-water"></i> Mini-fridge</li>
      <li><i class="fas fa-wifi"></i> Complimentary Wi-Fi</li>
      <li><i class="fas fa-shower"></i> Private bathroom with shower</li>
    </ul>
    <a href="{{$hotel->links}}" class="book-now-btn">Book Now</a>
  </div>
</div>
</div>


 

   <div class="footer">
    <div class="int-footer">
        <div class="right">
            <ul>
                <li>
                    <p>©2023 Team Hope</p>
                </li>
                <li>
                    <p>Allright reserved!</p>
                </li>
                <li>
                    <p>designed by team Hope</p>
                </li>

            </ul>
        </div>
        <div class="company">
            <ul>
                <h2>company</h2>
                <li><a href="#">about us</a></li>
                <li><a href="#">Hotels</a></li>
                <li><a href="#">customer</a></li>
            </ul>
        </div>
        <div class="our_facilities">
            <ul>
                <h2>our facilities</h2>
                <li><a href="#">Resturant</a></li>
                <li><a href="#">Bars</a></li>
                <li><a href="#">pick-up</a></li>
                <li><a href="#">swimming</a></li>
                <li><a href="#">pool</a></li>

            </ul>
        </div>
        <div class="subscribe">
            <h2>subscribe</h2>
            <p>Sed cursus ut nibh in semper.<br> Mauris varius et magna in fermentum.
            </p>
            <div class="form">

                <div class="form_box">
                    <form><input type="text" name="Email" />
                    </form>
                </div>
                <div class="form_btn">
                    <a href="#" type="submit">send</a>
                </div>

            </div>
        </div>
     
    </div>
    <div class="social_media">
        <div class="btn">
            <li><a><span class="fa-brands fa-facebook-f" ></span></a></li>
            
        </div>
        <div class="btn">
            <li><a><span class="fa-brands fa-twitter "></span></a></li>
      
        </div>
        <div class="btn">
            <li><a><span class="fa-brands fa-instagram"></span></a></li>
         
        </div>

    </div>
</div>
</div>



</body>
</html>