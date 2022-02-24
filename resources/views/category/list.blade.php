<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List categories</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<h2>Category list</h2>
<h1>Create category:<a href="/createc"> Here</a></h1>
<h1> Register :<a href="/register"> Here</a></h1>
<h1> Login :<a href="/login"> Here</a></h1>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Action1</th>
    <th>Action2</th>
    <th>Action3</th>
  </tr>
  @foreach($cat as $category)
  <tr>
    <td>{{$category->id}} </td>
    <td>{{$category->name}} </td>
    
   
    <td><form method="POST" action="/deletec/{{$category->id}}">
      @csrf
      
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" >delete</button>
    </form></td>
    <td> <a href="/showc/{{$category->id}} ">Show</a></td>
    <td> <a href="/showdatac/{{$category->id}} ">Update</a></td>
  </tr>
 @endforeach

</table>
</body>
</html>