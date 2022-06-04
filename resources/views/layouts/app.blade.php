<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/logo.png')}}">
     <!-- Styles -->
     <link href="{{ asset('css/all.css') }}" rel="stylesheet">
     <style lang="css">
         body {
             background-image: url('{{ asset('img/background.png') }}');
             /* background-position: center top; */
             /* background-repeat: no-repeat; */
             background-size: 100% auto;
             background-attachment: fixed;
         }
     </style>
</head>
<body class="container-fluid mt-3 w-80 vh-100">
    
    <x-nav-bar/>
    <main class="main min-vh-100">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>