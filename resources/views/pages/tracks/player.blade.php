<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tocar Música - {{ $track->title }}</title>
    <link rel="icon" href="{{ asset('img/logo.png')}}">
    <!--Links-->
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
</head>
<body>
    
    <div class="player-content">
        <audio controls src="data:audio/mpeg;base64,{{$track_base64}}">

        </audio>
    </div>
</body>
</html>