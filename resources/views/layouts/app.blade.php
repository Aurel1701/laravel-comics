<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
       {{-- richiamo al mio app.css --}}
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       {{-- richiamo al mio app.js --}}
       <script src="{{ asset('js/app.js')}}"></script>

    </head>
    <body>
    <header>
  <div class="header-container">
    <div class="logo">
    <img src="{{ asset('img/dc-logo.png')}}" alt="logo">
    </div>
    <nav class="header-navbar">
     <ul>
        <li><a href="#"></a>characters</li>
        <li><a href="#"></a>comics</li>
        <li><a href="#"></a>movies</li>
        <li><a href="#"></a>tv</li>
        <li><a href="#"></a>games</li>
        <li><a href="#"></a>collectibles</li>
        <li><a href="#"></a>videos</li>
        <li><a href="#"></a>fans</li>
        <li><a href="#"></a>news</li>
        <li><a href="#"></a>shop</li>
     </ul>
    </nav>
  </div>
    </header>


    <main>
    @yield('content')
    </main>

    <footer></footer>
    </body>
</html>
