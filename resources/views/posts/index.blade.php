<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>reflections</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
        <feed :posts="{{ $posts->toJson() }}" />
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
