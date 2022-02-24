<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> {{$pro['id']}} </h1>
   <h1> {{$pro['name']}} </h1>
    <h1>{{$pro['price']}}</h1>
    <a href="/home">go back</a>
    <img src="{{$pro['img']}}" style="width:100%" >
</body>
</html>