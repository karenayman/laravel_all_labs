<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<h2>Articales list</h2>
<h1>Create Articale:<a href="/create"> Here</a></h1>

<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Details</th>
    <th>slug</th>
    <th>is_used</th>
    <th>Action1</th>
    <th>Action2</th>
    <th>Action3</th>
  </tr>
  @foreach($art as $articale)
  <tr>
    <td>{{$articale->id}} </td>
    <td>{{$articale->name}} </td>
    <td>{{$articale->details}} </td>
    <td>{{$articale->slug}} </td>
    <td> {{$articale->is_used}}</td>
    <td> <a href="/delete/{{$articale->id}} ">Delete</a></td>
    <td> <a href="/show/{{$articale->id}} ">Show</a></td>
    <td> <a href="/showdata/{{$articale->id}} ">Update</a></td>
  </tr>
 @endforeach
</body>
</html>