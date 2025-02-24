<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $theme }} - Product List</title>
</head>
<body>
    <h1>{{ $theme }} Collection</h1>

    <ul>
        @foreach ($products as $product)
            <li><strong>{{ $product['Title'] }}</strong> by {{ $product['Author'] }}</li>
        @endforeach
    </ul>
</body>
</html>
