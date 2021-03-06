<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
      <!-- <link rel="stylesheet" href="../public/css/style-old.css"> -->
      <link rel="stylesheet" href="./css/app.css">


      <title>Portfolio</title>
  </head>

  <body>
    
      @include('front-office.header.header')

      @yield('front-office.content')

      @include('front-office.footer.footer')
    
  

    <!-- Script -->
    <script src="./js/app.js"></script>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
  </body>
</html>