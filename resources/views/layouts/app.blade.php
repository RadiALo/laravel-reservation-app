<!DOCTYPE html>
<html lang="en">

<head>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body>
    @include('blocks.menu')
  <div>
    @yield('content')
  </div>
</body>

</html>
