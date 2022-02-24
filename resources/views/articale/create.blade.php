<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Articale</title>
</head>
<body>
    <p>Create category </p>
    <form method="POST" action="/save" >
        @csrf

        <label for="catid">choose category :</label>
        <select name="fk_id" id="catid">
            @foreach($catid as $catids)
            <option>{{$catids['id']}}</option>
            @endforeach
        </select>

        
        <input type="text" name="name" placeholder="name" class="@error('name') is-invalid @enderror">
        <input type="text" name="details" placeholder="details" class="@error('details') is-invalid @enderror">
        <input type="text" name="slug" placeholder="slug" class="@error('slug') is-invalid @enderror">
        <input type="text" name="is_used" placeholder="is_used" class="@error('is_used') is-invalid @enderror">
        <button>Submit</button>
        
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