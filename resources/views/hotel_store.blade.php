<html>
    <head>
    <style>
  form {
    width: 50%;
    margin: 0 auto;
    padding: 30px;
    background-color: #f2f2f2;
    border-radius: 10px;
  }

  label {
    font-weight: bold;
    margin-top: 20px;
    display: block;
  }

  input[type="text"], input[type="date"], input[type="number"], input[type="file"], input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #3e8e41;
  }
</style>

    </head>
        <body>
        @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; margin-top: 20px; border-radius: 5px;">
        <ul style="list-style: none; padding-left: 0;">
        @foreach ($errors->all() as $error)
        <li style="margin-bottom: 10px;">{{ $error }}</li>
        @endforeach
</ul>
</div>
@endif
 

        <form action="{{route('list.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div>
        <label for="hotels">Hotel's Name:</label>
        <input type="text" name="hotels" id="hotels">
    </div>
    <div>
        <label for="checkin">Available-from:</label>
        <input type="date" name="checkin" id="checkin">
    </div>
    <div>
        <label for="checkout">to:</label>
        <input type="date" name="checkout" id="checkout">
    </div>
    <div>
        <label for="Rooms">Rooms:</label>
        <input type="number" name="Rooms" id="Rooms">
    </div>
    <div>
        <label for="image1">Image 1:</label>
        <input type="file" name="image1" id="image1" accept="image/*">
    </div>
    <div>
        <label for="image2">Image 2:</label>
        <input type="file" name="image2" id="image2" accept="image/*">
    </div>
    <div>
        <label for="image3">Image 3:</label>
        <input type="file" name="image3" id="image3" accept="image/*">
    </div>
    <div>
        <label for="detail">Detail:</label>
        <input type="text" name="detail" id="detail">
    </div>
   
    <div>
        <label for="roomdetail">Room Detail:</label>
        <input type="text" name="roomdetail" id="roomdetail">
    </div>
    <div>
        <label for="links">Links:</label>
        <input type="text" name="links" id="links">
    </div>
    <button type="submit" >Save</button>
</form>

        </body>
    </head>
</html>