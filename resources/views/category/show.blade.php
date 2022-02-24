<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$cat->id}}</h1>
    <h1>{{$cat->name}}</h1>
    <ul>
@foreach($cat->comments as $zft)
<li>{{$zft['name']}}</li>
<li>{{$zft['details']}}</li>
<li>{{$zft['slug']}}</li>
@endforeach
    </ul>
</body>
</html>