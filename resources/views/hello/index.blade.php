<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{!! $msg !!}</p>
    <form action="/hello" method="post">
    @csrf 
    <div>Name:<input type="text" name="name"></div>
    <div>Email:<input type="text" name="mail"></div>
    <div>Tel:<input type="text" name="tel"></div>
    <input type="submit" value="送信">
    </form>
    <hr>
    <ol>
    @for($i = 0; $i < count($keys); $i++)
    <li>{{$keys[$i]}}:{{$values[$i]}}</li>
    @endfor
    </ol>
</body>
</html>