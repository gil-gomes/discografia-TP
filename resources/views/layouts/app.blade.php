<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/logo.png')}}">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/all.css') }}" rel="stylesheet">
     <style lang="css">
         body {
             background-image: url('{{ asset('img/background.png') }}');
             background-position: center top;
             background-repeat: no-repeat;
             background-size: 100% 100%;
         }
     </style>
</head>
<body>
    
    <div class="container-fluid mt-3 content">
        <x-nav/>
        <div class="main">
            @yield('content')
        </div>
    </div>

</body>
</html>