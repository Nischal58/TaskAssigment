<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New</title>
</head>
<body>
<h1>Create Videos</h1>

<form action="/store" method="POST">
    @csrf
   <div>Enter the Video name
    <input type="text" name="videoname"/>
    </div>
    <div>Enter the Video Description
    <input type="text" name="videodesc"/>
    </div>
  <button type="submit" value="createnew">Create New</button>
</form>

    
</body>
</html>