<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing data from Controller to View in Laravel</title>
</head>
<body>
    <h1>Laravel Turtorial</h1>
    <p>I'm learning how to passing data from controller to view in Laravel</p>

    <p>Name : {{ $Name }}</p>
    <p>Courses : </p>
    <ul>
            @foreach($Courses as $Course)
                <li>{{ $Course }}</li>
            @endforeach
    </ul>
</body>
</html>