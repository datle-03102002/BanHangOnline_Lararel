<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach (Session::get('cart') as $item)
        <div>{{ $item['ten'] }}</div>
    @endforeach
</body>

</html>
