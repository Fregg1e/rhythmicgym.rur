<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title-block')</title>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
</head>
  <body>
    @include('inc.header')
    @yield('content')

    <div class="aside">
      <h4>Боковая панель</h4>
      <p>Это просто боковая панель</p>
    </div>
  </body>
</html>
