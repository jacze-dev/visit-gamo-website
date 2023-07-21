<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/index.js"></script>
     
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
       
      
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">

</head>
<style>
    .pagination{
display: flex;
justify-content: center;
width: 100%;
margin: 20px;
    }
    .pagination ul{
        display: flex;
    }
    .pagination ul li{
      
        list-style: none;
        color: rgba(240, 231, 231, 0.989);
        padding: 10px;
        background-color: rgb(181, 181, 181);
        border: solid 1px rgba(128, 128, 128, 0.402);
        
    }
    .pagination ul li a{
        text-decoration: none;
        /* color: gray: */
        color: rgb(240, 143, 31);
        cursor: pointer;
        background-color: azure;
       
        padding: 8px 16px;

    }
    .p1{
        justify-content: space-between
    }
    .noMesssageContainer{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .noMessage{
     color: #fff;
     font-family: cursive;
     padding: 20px;
    }
    .noBlogs{
        color: #4d1414;
     font-family: cursive;
     padding: 20px; 
    }

</style>
<style>

    .hero{
    background: #ff676d;
    height: 100vh;
    width: 100%;
    position: relative;
    }
    .hero h1 {
    text-align: center;
    padding-top: 80px;
    font-size: 40px;
    color: #fff;
    }
    
    .slide-row{
       display: flex;
       width: 3200px;
       transition: 0.5s;
    }
    .slide-col{
       width:800px;
       height: 400px;
       position: relative;
    }
    .user-img{
       position: absolute;
       top: 0;
       right: 0;
       height: 100%;
    }
    .user-img img{
    height: 100%;
    border-radius: 10px;
    }
    .user-text{
       background-color: #2d3a59;
       width: 520;
       height: 270px;
       position: absolute;
       left: 0;
       top: 50%;
       transform: translateY(-50%);
       border-radius: 10px;
       color: #d3d4d6;
       padding: 45px;
       box-sizing: border-box;
       z-index: 2;
    
    }
    .user-text p{
     font-size: 18px;
     line-height: 24px;
    }
    .user-text h3{
    margin: 35px 0 5px; 
    color: #fff;
    }
    .container{
       width: 800px;
       height: 400px;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-50%);
    }
    .indicatior{
       position: absolute;
       left: 50%;
       transform: translateX(-50%);
       bottom: -50px;
    }
    .btn1{
       display: inline-block;
       height: 15px;
       width: 15px;
       margin: 4px;
       border-radius: 15px;
       background: #fff;
       cursor: pointer;
    }
    .active{
       width: 45px;
    }
    .testimonial{
       width: 100%;
       height: 100%;
       overflow: hidden;
    }
    </style>
<body>


    <div class="container1" id="container1">
        <nav class="navBar">
            <div class="logoHeader">
                <h3><i class="fa-solid fa-route"></i></h3>
            </div>
            <div class="nav">
                <ul class="nav-menu">
                        @auth
                        @if(Gate::allows('admin-only'))
                        <li class="greetings"><p>{{'welcome '.auth() -> user() -> first_name}}</p></li>
                        <li class="drop-down">
                       
                            <li > <a href="{{route('goToL')}}">Destinations</a></li>
                                   <li><a href="{{route('list.index')}}">Hotels</a></li>
                                   <li><a href="{{route('blogs.index')}}">Blogs</a></li>
                                   <li><a href="{{route('usersIndex')}}">users</a></li>
                                   <li><a href="{{route('posts.index')}}">posts</a></li>
                        <li><form style="background: none" method="POST" action="{{route('logout')}}">
                           @csrf
                           <button type="submit">Logout</button>   
                        </form></li>
                        @else
                        <li class="greetings"><p>{{'welcome '.auth() -> user() -> first_name}}</p></li>
                        <li class="drop-down">
                       
                            <span > <a href="">Destinations</a></span>
                             <div class="dropd-content">
                                   <ul>
                                     <li class ="drop-down-2">
                                         <a href="#">ArbaMinch </a> 
                                         <div class="dropd2-content">
                                             <ul>
                                                @foreach ($arbaminch as $item)
                                                <li><a href="{{route('addPlaceToArba.show',$item->id)}}">{{$item->name}}</a></li>
                                                @endforeach
                                                 {{-- <li><a href="#">Chamo</a></li>
                                                 <li><a href="#">Abaya</a></li>
                                                 <li><a href="#">Azo Ranch</a></li>
                                                 <li><a href="#">MInch</a></li>
                                                 <li><a href="#">Ye Egziabher Dldy</a></li> --}}
                                             </ul>
                                         </div>
                                     </li>
                                     @foreach ($nature as $item)
                                     <li><a href="{{route('addPlaceToNuture.show',$item->id)}}">{{$item->name}}</a></li>
                                     @endforeach
                                     {{-- <li>
                                         <a href="#"> Nech Sar Park</a> 
                                     </li>
                                      <li>
                                         <a href="#">Kamba </a> 
                                     </li>
                                     <li >
                                         <a href="#">Dorze & Chencha </a> 
                                         
                                     </li> --}}
                                     <li class ="drop-down-2">
                                         <a href="#">Religuos places </a> 
 
                                         <div class="dropd2-content">
                                             <ul>
                                                @foreach ($relig as $item)
                                          <li><a href="{{route('addReligArea.show',$item->id)}}">{{$item->name}}</a></li>
                                           @endforeach
                                                 {{-- <li><a href="#">Zigiti </a></li>
                                                 <li><a href="#">Eli</a></li>
                                                 <li><a href="#">Gerese</a></li> --}}
                                             </ul>
                                         </div>
                                     </li>
                                    
                                     
                                   
                                     
                                   </ul>
                         
                         
                                   <li><a href="#cnt3">Services</a></li>
                                   <li><a href="#container5">Blog</a></li>
                        <li><form style="background: none" method="POST" action="{{route('logout')}}">
                           @csrf
                           <button type="submit">Logout</button>   
                        </form></li>
                        @endif
                        
                        @else
                        <li><a href="">Home</a></li></li>
                        <li ><a href="{{route('login')}}">LogIn</a></li>
                        <li class="drop-down">
                       
                            <span > <a href="">Destinations</a></span>
                             <div class="dropd-content">
                                   <ul>
                                     <li class ="drop-down-2">
                                         <a href="#">ArbaMinch </a> 
                                         <div class="dropd2-content">
                                             <ul>
                                                @foreach ($arbaminch as $item)
                                                <li><a href="{{route('addPlaceToArba.show',$item->id)}}">{{$item->name}}</a></li>
                                                @endforeach
                                                 {{-- <li><a href="#">Chamo</a></li>
                                                 <li><a href="#">Abaya</a></li>
                                                 <li><a href="#">Azo Ranch</a></li>
                                                 <li><a href="#">MInch</a></li>
                                                 <li><a href="#">Ye Egziabher Dldy</a></li> --}}
                                             </ul>
                                         </div>
                                     </li>
                                     @foreach ($nature as $item)
                                     <li><a href="{{route('addPlaceToNuture.show', $item->id)}}">{{$item->name}}</a></li>
                                     @endforeach
                                     {{-- <li>
                                         <a href="#"> Nech Sar Park</a> 
                                     </li>
                                      <li>
                                         <a href="#">Kamba </a> 
                                     </li>
                                     <li >
                                         <a href="#">Dorze & Chencha </a> 
                                         
                                     </li> --}}
                                     <li class ="drop-down-2">
                                         <a href="#">Religuos places </a> 
 
                                         <div class="dropd2-content">
                                             <ul>
                                                @foreach ($relig as $item)
                                                <li><a href="{{route('addReligArea.show',$item->id)}}">{{$item->name}}</a></li>
                                                 @endforeach
                                                       {{-- <li><a href="#">Zigiti </a></li>
                                                       <li><a href="#">Eli</a></li>
                                                       <li><a href="#">Gerese</a></li> --}}
                                             </ul>
                                         </div>
                                        </li>
                                 
                                   </ul>
                         
                                   <li><a href="#cnt3">Services</a></li>
                                   <li><a href="#container5">Blog</a></li>
                                   <li><a href="{{route('signup')}}">SignUp</a></li>
                         
                     </li>
                        @endauth
                </ul>
            </div>
        </nav>
        <div class="sloganContainer">
            <div class="logoHeader">
            </div>


            <div class="logoBtnsContainer">
                
                <div class="logoSlogan">
                    <img width="300px" height="300px" src="./img/photo_2023-01-12_13-48-04-removebg.png" alt="logo">
                </div>
            </div>


            <div class="slogan">
                <h4>we'll take you there !</h4>
            </div>
        
             <div class="statstics">
                <div class="data">
                    
                   <h1>{{$totalUsers}}</h1>
                   <p>user access</p>
                     
                    
                </div>
                <div class="data">

                    <h1>{{$totalHotels}}</h1>
                    <p>Hotels&Resorts</p>
                 
                </div>
                <div class="data">
                    <h1>{{$totalDestin}}</h1>
                    <p>Destinations</p>
                </div>
            </div>
        </div>

    </div>
    <div class="placeHolder">

    </div>
    <!-- this part will cover all destinations-->
    <div class="container2">
        <div class="hero">
            <h1>Destinations</h1> 
            <div class="container">
    
             <div class="testimonial">
             <div class="slide-row" id="slide">

                @foreach ($arbaminch as $item)
                <div class="slide-col">
                    <div class="user-text">
                        <p>{{$item->description}}</p>
                    
                     <h3>{{$item->name}}</h3>
                           <div class="user-img">
                           <img src="{{asset('images/'.$item->image)}}" alt="">
                           </div>
                   </div>
              </div>
                @endforeach
    

    
    
               </div>
         
            </div>
            <div class="indicator">
             <span class="btn1 active"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
             <span class="btn1"></span>
          </div>
          </div>
            </div>
    </div>

    
    <div class="container3" id="cnt3">
        <div class="serv">
            <h1>Services</h1>
        </div>

        <div class="nav_hotel">
            <nav class="real_nav">
                <ul>


                <div class="btn">
                        <li><a href="{{route('hotel')}}"><i class="fa-regular fa-hotel"></i>  <p>Hotel</p></a></li>
                    
                       
                    </div>

                    
                    <div class="btn">
                        <li><a href="#"><i class="fa-regular fa-hotel"></i>  <p>Destinations</p></a></li>
                    
                       
                    {{-- </div>
                    <div class="btn">
                        <li><a href="#"><i class="fa-regular fa-restroom-simple"></i><p>Car rental</p></a></li>
                        
                            
                       
                    </div> --}}
                    {{-- <div class="btn">
                        <li><a href="#"><i class="fa-solid fa-car"></i></span><p>Shoping</p></a></li>
 
                      
                    </div> --}}


                </ul>
            </nav>
        </div>


    </div>
    <!-- this is end of container 3-->
    <div class="container4">
    

            @if($messages->count() == 0)

           <div class="noMesssageContainer"><p class="noMessage"> No message here</p></div>
            
            @else
            <div class="container4Header">
                <p>Cusutomers says...</p>
            </div>
            <div class="customerHolder">
            @foreach ($messages as $user)
          


            <div class="customerCard">
                    <div class="profilePic">
                        <img width="150px" height="150px" src="{{asset('images/'.$user->image)}}" alt="img">
                    </div>
                        <div class="name">
                    <p>{{$user -> first_name.' '.$user -> last_name}}</p>
                    </div>
                    <div class="message">
                    <p>{{$user->message}}</p>
            </div>
    
            </div>
            @endforeach
            @endif
           
        </div>
        
     </div>
     
    </div>
    <div class="pagination" id="p1">{{ $messages->appends(['1' => $messages->currentPage()])->links() }}</div>
</div>

    <!-- this is the will be the end of container 4 -->

 <div class="container5" id="container5">
    @if($blogs->count() == 0)

    <div class="noMesssageContainer"><p class="noBlogs"> No Blogs here</p></div>
    @else
        <div class="blogHeader">
            <p> Our Blog</p>
        </div>
        <div class="blogHolder">
            

            @foreach ($blogs as $blog)
            <div class="blog">
                <div class="pic">
                    <img src="{{asset('images/'.$blog->image)}}" alt="" width="100px" height="100px">
                    <div class="date">
                        <p>09 <br> AUG</p>

                    </div>
                </div>
                <div class="title">
                    <h4>{{$blog->title}}</h4>
                    <p>{{$blog->description}}</p>
                </div>

            </div>
            @endforeach

        </div>

        <div class="pagination">{{ $blogs->appends(['2' => $blogs->currentPage()])->links() }}</div>
        @endif
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
                            <div class="inputText">
                                <div  class="header">Any idea to share!</div>
                                <form method="POST" action="{{route('storeMessage')}}">
                                 @csrf
                                   <div class="message">
                                    <textarea rows="10" cols="20" name="message" id=""> </textarea>
                                   </div>
                                    <div class="submit">
                                        <input type="submit" value="SAHRE" class="shareBtn"></div>
                                </form>
                            </div>
                           
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
        



        

        <script>
            var btn = document.getElementsByClassName("btn1");
            var slide = document.getElementById("slide");
            btn[0].onclick = function(){
               slide.style.transform="translate(0)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[1].onclick = function(){
               slide.style.transform="translate(-800px)";
                for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }   
            btn[2].onclick = function(){
               slide.style.transform="translate(-1600px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[3].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[4].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[5].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[6].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[7].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[8].onclick = function(){
               slide.style.transform="translate(-2400px)";
               for( i = 0;i<8;i++){
                 btn[i].classList.remove("active");
                }
                this.classList.add("active");
            }
         </script>


</body>


</html>