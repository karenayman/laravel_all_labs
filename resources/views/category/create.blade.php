<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new category</title>
</head>
<body>
    <p>Create category </p>
    <h1>Hello {{ auth()->user()->name }}</h1>
    <form method="POST" action="/savec" >
        @csrf
      
        <input type="text" name="name" class="@error('name') is-invalid @enderror">
        <button >ADD</button>
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    </form>
</body>
</html>