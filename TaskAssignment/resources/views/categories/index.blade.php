<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="/create">Create New </h1>
<table border="1">

<tr>
    <th>id </th>
    <th>Name </th>
    <th>Description </th>
    <th colspan="3">Actions </th>


</tr>
@foreach($vidoe as $videos)
<tr>
    <th>{{$loop->index+1}} </th>
    <th>{{$videos->name}} </th>
    <th>{{$videos->description}} </th>
    <th><a href="/show/{{$videos->id}}">View </th>
    <th><a href="/edit/{{$videos->id}}"> Edit</th>
    <th><a href="/delete/{{$videos->id}}">Delete </th>
</tr>

@endforeach
</table>
    
</body>
</html>


