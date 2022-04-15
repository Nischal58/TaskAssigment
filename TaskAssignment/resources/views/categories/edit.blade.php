<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1>Edit Videos</h1>

<form action="/update/{{$video->id}}" method="POST">
    @csrf
    @method('put')
   <div>Enter the Video name
    <input type="text" name="videoname" value="{{$video->name}}"/>
    </div>
    <div>Enter the Video Description
    <input type="text" name="videodesc" value="{{$video->description}}"/>
    </div>
  <button type="submit" value="createnew" >Update</button>
</form>

    
</body>
</html>