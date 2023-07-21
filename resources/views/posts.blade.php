<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>

        <style>
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
            }
        </style>

<body>
<div class="container1">

   <div class="posts">
      <table>
         <th>
            post id
         </th>
         <th>
            posted by
         </th>
         <th>
           messages
         </th>
         <th> posted date</th>
         @foreach ($posts as $post)
         <tr>
            <td>{{$post->id}}</td>
            <td>
               {{$post->first_name}}
            </td>
               
            <td>  {{$post->message}}</td>
      
            <td>
               {{$post->created_at}}
               </td>
            <td>
              
               <form action="{{route('posts.destroy',$post->id)}}" method="POST"  class="">
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