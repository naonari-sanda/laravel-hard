<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>
    <div>
        <form action="/hello" method="post">
        @csrf
        ID：<input type="text" id="id" name="id">
        <input type="submit">
        </form>
    </div>
<table border="1">
@foreach($data as $item)
<tr>
<th>{{ $item->id }}</th>
<td>{{ $item->name }}</td>
<td>{{ $item->mail }}</td>
<td>{{ $item->age }}</td>
</tr>
@endforeach
</table>
</body>
</html>