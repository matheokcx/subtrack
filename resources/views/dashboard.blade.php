<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite("resources/css/app.css")
    <title>Subtrack - Dashboard</title>
</head>
<body>
    <form action="{{route("logout")}}" method="POST">
        @csrf
        <button type="submit" class="text-black border-2 border-gray-500 rounded-2xl w-1/12 h-9">Déconnexion</button>
    </form>
</body>
</html>
