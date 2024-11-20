<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite("resources/css/app.css")
    <title>{{$titre}}</title>
</head>
<body>
    <x-navigation-menu></x-navigation-menu>
    <main>
        {{$slot}}
    </main>
</body>
</html>
