<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
    </head>
    <body>
        <h1>{{ $text }} </h1>
        <div>Имя: {{ Auth::user()->name }}</div>
        <div>Электронная почта: {{ Auth::user()->email }}</div>
        <div>ID: {{ Auth::user()->id }}</div>
    </body>
</html>