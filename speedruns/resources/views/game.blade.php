<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    <h1>{{ $game->name }}</h1>
    @foreach($game->records as $record)
    {{ $record->time }} <br>
    {{ $record->category }} <br>
    {{ $record->user->name }}
    @endforeach
</body>
</html>
