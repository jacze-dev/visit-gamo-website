<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<style>
   <style>
      .container1{
         display: flex;
         flex-direction: column;
      }
      .header{
         background-color: green;
      display: flex;
      justify-content: space-around;
      padding: 20px;
      width: 100%  

   }
   .header a{
      text-decoration: none;
      color: white;
      
      padding: 5px;
    
   }
   .header div{
      margin:10px:
   }
            table {
                width: 80%;
                margin: 0 auto;
                border-collapse: collapse;
                text-align: center;
                margin: 30px
            }
            th, td {
                border: 1px solid gray;
                padding: 8px;
                max-width: 150px;
            }
            th {
                background-color: lightgray;
                font-weight: bold;
            }
            .delete {
                background-color: red;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
                float: right;
            }
            img{
               object-fit: cover;
               height: 100px;
               width: 100px;
            
            }
        </style>
        </head>
<body>
<div class="container1">
   <div class="header">
    <div><a href="{{route('addPlaceToArba.index')}}">Add To Arbaminch</a>  </div>   
      <div><a href="{{route('addPlaceToNuture.index')}}">Add To Nature</a></div>  
       <div> <a href="{{route('addReligArea.index')}}">Add To Religious Area</a></div>
   </div>
   <div class="posts">

      <table>
      
        
         <th>
           id
         </th>
         <th>
           Name
         </th>
         <th>
            Description
         </th>
         <th>
            Image
         </th>
         <th>
            Location
         </th>
       

         @foreach ($religious as $dest)
         <tr>
            <td>
              {{ $dest->id}}
            </td>
            <td>
               {{$dest->name}}
            </td>
            <td>
              {{ $dest->description}}
            </td>
            <td>
               <img src="{{asset('images/'.$dest->image)}}" alt=""> 
            </td>
            <td>
              {{ $dest->location}}
            </td>
        <td>
            <form method="post"  action="{{route('addReligArea.destroy',$dest->id)}}"  >
                @method('DELETE')
                @csrf

               <input type="submit" class="delete" value="delete" >
            </form>
            </td>
          
         </tr>

         @endforeach
         @foreach ($nature as $dest)
         <tr>
            <td>
              {{ $dest->id}}
            </td>
            <td>
              {{ $dest->name}}
            </td>
            <td>
               {{$dest->description}}
            </td>
            <td>
               <img src="{{asset('images/'. $dest->image)}}" alt=""> 
            </td>
            <td>
               {{ $dest->location}}
            </td>
        <td>
            <form method="post"  action="{{route('addPlaceToNuture.destroy',$dest->id)}}"  >
                @method('DELETE')
                @csrf

               <input type="submit" class="delete" value="delete">
            </form>
            </td>
          
         </tr>

         @endforeach

         @foreach ($arbaminch as $dest)
         <tr>
            <td>
             {{  $dest->id}}
            </td>
            <td>
              {{ $dest->name}}
            </td>
            <td>
              {{ $dest->description}}
            </td>
            <td>
               <img src="{{asset('images/'.$dest->image)}}" alt=""> 
            </td>
            <td>
               {{ $dest->location}}
            </td>
        <td>
            <form method="post"  action="{{route('addPlaceToArba.destroy',$dest->id)}}"  >
                @method('DELETE')
                @csrf

               <input type="submit" class="delete" value="delete">
            </form>
            </td>
          
         </tr>

         @endforeach
         
         

        
      </table>
   </div>
</div>
</body>
</html>