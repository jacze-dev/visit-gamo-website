<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <style>
    .container1 {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .header {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }
    .header p {
      text-decoration: none;
      color: white;
      background-color: green;
      padding: 15px 30px;
      font-family: cursive;
      font-size: 30px;
    }
    .form {
      display: flex;
      flex-direction: column;
      padding: 30px;
      background-color: lightgray;
      border-radius: 10px;
      width: 50%;
    }
    .form input,
    .form textarea {
      margin: 10px;
      padding: 10px;
      font-size: 18px;
      border-radius: 5px;
      border: 1px solid gray;
    }
    .form .submit {
      width: 50%;
      margin: 10px auto;
      padding: 10px;
      background-color: green;
      color: white;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-size: 20px;
    }
    .form .submit:hover {
      background-color: darkgreen;
    }
    .error {
      color: red;
      font-size: 16px;
      margin-bottom: 10px;
    }
  </style>
    
  </style>
  <body>
    <div class="container1">
      <div class="header">
        <p>new post</p>
      </div>
      <div class="form">
        <form action="{{route('blogs.store')}}" method="POST" class="form" enctype="multipart/form-data">
          @csrf
          <input type="text" name="title" placeholder="title" />
          @error('title')
          <p class="error">{{$message}}</p>
          @enderror
          <textarea
            name="description"
            id=""
            cols="30"
            rows="10"
            placeholder="discription"
          ></textarea>
          @error('discription')
          <p class="error">{{$message}}</p>
          @enderror
          <input type="file" name="image" id="" accept="image/*" />
          @error('image')
          <p class="error">{{$message}}</p>
          @enderror
          <input type="submit" value="post" class="submit"/>
        </form>
      </div>
    </div>
  </body>
</html>
