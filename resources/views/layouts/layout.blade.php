<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/user.css') }}">

  <script src="/js/app.js" defer></script>
</head>
<body>
  <div class="container py-4">
    @yield('content')
  </div>

</body>
</html>
