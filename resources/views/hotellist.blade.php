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
      display: flex;
      justify-content: flex-end;
      
   }
   .header a{
      text-decoration: none;
      color: white;
      background-color: green;
      padding: 5px;
   }
            table {
                width: 80%;
                margin: 0 auto;
                border-collapse: collapse;
                text-align: center;
            }
            th, td {
                border: 1px solid gray;
                padding: 8px;
                max-width: 150px;
                overflow: hidden;
                max-height: 150px;
                
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
        </style>
        </head>
<body>
<div class="container1">
   <div class="header">
      <a href="{{route('list.create')}}">Add Post</a>
   </div>
   <div class="posts">

      <table>
      
        
         <th>
           Hotel
         </th>
         <th>
           Roomdetail
         </th>
         <th>
            Detail
         </th>
         <th> checkin</th>
         <th> checkin</th>
         <th> Rooms</th>
         <th>image1</th>
         <th>image1</th>
         <th>image1</th>
         
         <th>links</th>
         @foreach ($hotels as $hotel)
         <tr>
         <td>{{$hotel -> hotels}}</td>
         <td>{{$hotel -> roomdetail}}</td>
         <td>{{$hotel -> detail}}</td>
         <td>{{$hotel -> checkin}}</td>
        <td>{{$hotel -> checkout}}</td>
        <td>{{$hotel -> NoRooms}}</td>
        <td>{{$hotel -> image1}}</td>
        <td>{{$hotel -> image2}}</td>
        <td>{{$hotel -> image3}}</td>

        <td>{{$hotel -> links}}</td>
        <td>
            <form method="post"  action="{{ route('list.destroy', $hotel->id) }}"  >
                @method('DELETE')
                @csrf

               <input type="submit" class="delete" >
            </form>
            </td>
            <td>
               <
            </td>
          
         </tr>

         @endforeach

        
      </table>
   </div>
</div>
</body>
</html>