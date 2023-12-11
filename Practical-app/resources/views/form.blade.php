<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
    <h1>{{$title}}</h1>
    <form action="{{$url}}" method="POST" class="form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{$edit->Name}}">
        <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
        </span>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{$edit->Email}}">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="{{$edit->Password}}">
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        <br><br>
        <input type="submit" name="submit" class="btn btn-success"  value="register">

    </form>
</div>

</body>
</html>