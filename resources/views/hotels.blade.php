<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link rel="stylesheet" href="https://kit.fontawesome.com/bf54c025ef.css" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/hotels.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
 
  
</head>

<body>
    <div class="container1">
        <div class="logo">
            <h2> <a href="{{route('index')}}">logo</a></h2>
        </div>
        <nav class="real_nav">
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <p>Home</p>
                    </a>
                </li>

                <li>
                    <a href="">
                       <p>destination</p> 
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
    <div class="container2">
        <h1>Hotels </h1>
        @foreach($hotels as $hotel)
        <div class="hotels">
            <li>{{$hotel-> hotels}}</li>
               <li>  <a href=" {{ $hotel->links}}" >Hotel</a></li>
               <li> <a href="{{route('to_book', ['id' => $hotel->id])}}">See Detail</a></li>
             
            </div>
            @endforeach
</div>
           
          
    
    <!-- this is the end of container2 -->

    <div class="container3">
        <div class="head">
            <div class="title">
                <p>Popular hotel & hostel destinations</p>
            </div>
            <div class="text">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <hr>
        </div>
        <div class="hotels">

            <div class="hotelCard" >
                <div class="textHolder">
                    <p class="name">
                        New York
                    </p>
                    <p class="days">
                        3 nights
                    </p>
                    <p class="price">
                        $1,000
                    </p>
    
                  <button class="btn">
                   BOOK NOW
                </button>
                </div>
               

            </div>
            <div class="hotelCard">
                <div class="textHolder">
                <p class="name">
                    New York
                </p>
                <p class="days">
                    3 nights
                </p>
                <p class="price">
                    $1,000
                </p>

                <button class="btn">
                    BOOK NOW
                 </button>
                </div>
            </div>
            <div class="hotelCard">
            <div class="textHolder">
                <p class="name">
                    New York
                </p>
                <p class="days">
                    3 nights
                </p>
                <p class="price">
                    $1,000
                </p>

                <button class="btn">
                   BOOK NOW
                </button>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="divider">

    </div>
  
    <div class="footer">
        <div class="int-footer">
            <div class="right">
                <ul>
                    <li>
                        <h1 class="text-primary"><span class="text-white">visit</span>Gamo</h1>
                    </li>
                    <li>
                    <p></p>
                    </li>
                         <li>
                            <p></p>
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
            <div class="Contact">
                <h2>Contact us</h2>
                <ul>
                    <li> <h4><i class="fa-solid fa-location-dot"></i> ArbaMinch,Southern Region,Ethiopia</h4></li>
                        <li> <h4><i class="fa-solid fa-phone"></i>  +2519xxxxxx    </h4></li>
                        <li> <h4><i class="fa-solid fa-envelope"></i>  Hope@gmail.com</h4></li>
                </ul>
             
              
                </div>
            </div>

            <h3 class="love">Follow us!</h3>
            <div class="social_media">
             
                <div class="btn">
                    <li><a><i class="fa-brands fa-instagram"></i></a></li>
                    
                </div>
                <div class="btn">
                    <li><a><i class="fa-brands fa-facebook"></i></a></li>
              
                </div>
                <div class="btn">
                    <li><a><i class="fa-brands fa-linkedin"></i></a></li>
                 
                </div>
        
            </div>
    
            
        <div class="Right">
        
                
                    <p>©2023 Team Hope</p>
              
            
        </div>
    
        </div>
        


 

</body>

</html>