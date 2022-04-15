<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
    <tr>
        <td>Movie Name</td>
        <td>Movie Link</td>
</tr>  
    @foreach($video as $videos)
    <tr>
        <td>{{$videos->name}}</td>
        <td>{{$videos->link}}</td>
    </tr>
@endforeach
    </table>
</body>
</html>