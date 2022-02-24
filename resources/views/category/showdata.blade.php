<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Create category </p>
 
        
       
        
    <form method="POST"  action="/savedatac">
      @csrf
      <input type="text" name="name" value="{{$cat->name}}" class="@error('name') is-invalid @enderror">
      <input type="hidden" name="id" value="{{$cat->id}}">
      <input type="hidden" name="_method" value="PUT">
      <button>Update</button>
      </form>
    

        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
</body>

</html>