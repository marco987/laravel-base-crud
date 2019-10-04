<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>POST</title>

      <!-- CSS -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>

    <div class="container">      
      <header>
        <h1>FaceBool POSTs</h1>
      </header>

      <main>
        @yield('content')
      </main>

      <footer>
        <h5>FaceBool S.p.A.</h5>
      </footer>
    </div>

  </body>
</html>
