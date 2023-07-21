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
            user id
         </th>
         <th>
            user photo
         </th>
         <th>
            first name
         </th>
         <th>
            last name
         </th>
         <th>
         email
         </th>
         <th>
         user status
         </th>
    
       
         <th> created date</th>
         @foreach ($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>
               <img src="{{asset('images/'. $user->image)}}" alt="" width="100px" height="100px">
            </td>
               
            <td>
               {{$user->first_name}}
               </td>
            <td>
               {{$user->last_name}}
               </td>
            <td>
               {{$user->email}}
               </td>
            <td>
               @if($user -> is_admin)
              <p>admin</p>
              @else
              <p>user</p>
               @endif
            
               </td>

            <td>
               {{$user->created_at}}
               </td>
            <td>
              
               <form action="{{route('deleteUser', $user->id)}}" method="POST"  class="">
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