<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<style>
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
               border-radius: 50%;
            }
      
</style>
<body>
<div class="container1">
   <div class="header">
      <a href="{{route('blogs.create')}}">Add Post</a>
   </div>
   <div class="posts">

      <table>
         <th>
            post id
         </th>
         <th>
            photo
         </th>
         <th>
            Title
         </th>
         <th>
            Description
         </th>
         <th> posted date</th>
         @foreach ($blogs as $blog)
         
         <tr>
            <td>{{$blog->id}}</td>
            <td>
             <img src="{{asset('images/'.$blog->image)}}" alt="">
            </td>
               
            <td>  {{$blog->title}}</td>
            <td>
               {{$blog->description}}
               </td>
            <td>
               {{$blog->created_at}}
               </td>
            <td>
              
               <form action="{{route('blogs.destroy',$blog->id)}}" method="POST"  class="">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="delete">
               </form>
               </td>
      
            </tr>
             
         @endforeach
        

      

      </table>
   </div>
</div>
</body>
</html>