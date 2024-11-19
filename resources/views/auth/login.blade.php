<!doctype html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite("resources/css/app.css")
    <title>Subtrack - Login</title>
</head>
<body class="w-screen h-screen bg-gradient-to-br from-blue-700 to-green-900 text-white flex flex-col items-center justify-center">
    <div class="w-1/3 h-2/3 rounded-3xl bg-white/45 flex flex-col items-center gap-16 pt-8">
        <h2 class="text-4xl font-bold">Connexion</h2>
        <form action="{{route("login")}}" method="POST" class="w-full flex flex-col items-center gap-12">
            @csrf
            <input type="text" name="email" placeholder="Votre mail" class="w-3/4 h-9 rounded-2xl p-2 border-2 border-gray-400 text-black">
            <input type="text" name="password" placeholder="Votre mot de passe" class="w-3/4 h-9 rounded-2xl p-2 border-2 border-gray-400 text-black">
            <div>
                <label for="remember">Rester connecter</label>
                <input type="checkbox" name="remember">
            </div>
            <button type="submit" class="w-1/4 h-10 rounded-2xl text-black bg-white font-bold transition-all hover:-translate-y-2">Envoyer</button>
        </form>
    </div>
</body>
</html>
