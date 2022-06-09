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
  <div class="jumbo"></div>
    </header>



    <main>
    @yield('content')
    </main>

    <footer>
    <div class="footer-left">
   <ul>
    <li>
        <h3>dc comics</h3>
    </li>
    <li><a href="#">Characters</a></li>
    <li><a href="#">Comics</a></li>
    <li><a href="#">Movies</a></li>
    <li><a href="#">Tv</a></li>
    <li><a href="#">Games</a></li>
    <li><a href="#">Videos</a></li>
    <li><a href="#">News</a></li>
   </ul>

  <ul>
    <li>
        <h3>shop</h3>
    </li>
    <li><a href="#">Shop DC</a></li>
    <li><a href="#">Shop DC Collectibles</a></li>
  </ul>

 <ul>
    <li>
        <h3>dc</h3>
    </li>
    <li><a href="#">Terms Of Use</a></li>
    <li><a href="#">Privacy policy (New)</a></li>
    <li><a href="#">Ad Choices</a></li>
    <li><a href="#">Advertising</a></li>
    <li><a href="#">Jobs</a></li>
    <li><a href="#">Subscriptions</a></li>
    <li><a href="#">Talent Workshops</a></li>
    <li><a href="#">CPSC Certificates</a></li>
    <li><a href="#">Ratings</a></li>
    <li><a href="#">Shop Help</a></li>
    <li><a href="#">Contact Us</a></li>
 </ul>

<ul>
    <li>
        <h3>sites</h3>
    </li>
    <li><a href="#">DC</a></li>
    <li><a href="#">MAD Magazine</a></li>
    <li><a href="#">DC Kids</a></li>
    <li><a href="#">DC Universe</a></li>
    <li><a href="#">DC Power Visa</a></li>
</ul>

</div>
<div class="footer-right-logo">
<img src="{{ asset('img/dc-logo-bg.png')}}" alt="">
</div>

    </footer>
    </body>
</html>
