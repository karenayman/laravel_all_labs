<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>update  articale </p>
    <form method="Post" action="/savedata">
    @csrf
    <input type="hidden" name="id" value="{{$art->id}}">
        <input type="text" name="fk_id" value="{{$art->fk_id}}" class="@error('fk_id') is-invalid @enderror">
        <input type="text" name="name" value="{{$art->name}}" class="@error('name') is-invalid @enderror">
        <input type="text" name="details" value="{{$art->details}}" class="@error('details') is-invalid @enderror">
        <input type="text" name="slug" value="{{$art->slug}}" class="@error('slug') is-invalid @enderror">
        <input type="text" name="is_used" value="{{$art->is_used}}" class="@error('is_used') is-invalid @enderror">
        <button>Update</button>
        @error('fk_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('details')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('slug')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('is_used')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </form>
</body>
</html>