<!doctype html>
<html lang=fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite("resources/css/app.css")
        <title>SubTrack - Accueil</title>
    </head>
    <body class="w-screen bg-gradient-to-tl from-blue-500 to-green-800 text-white flex flex-col items-center gap-20 py-12">
        <header class="w-full flex flex-col items-center gap-12">
            @guest
            <nav class="w-full flex flex-row justify-end pr-6 gap-6 mb-16">
                <button class="w-1/12 h-10 rounded-2xl bg-white text-black font-bold opacity-60 transition-all hover:opacity-100"><a href="{{route("login")}}">Connexion</a></button>
                <button class="w-1/12 h-10 rounded-2xl bg-white text-black font-bold opacity-60 transition-all hover:opacity-100"><a href="{{route("register")}}">Inscription</a></button>
            </nav>
            @endguest
            @auth
                <nav class="w-full">
                    <form action="{{route("logout")}}" method="POST" class="w-full flex flex-row justify-end pr-6 gap-6 mb-16">
                        @csrf
                        <button class="w-1/12 h-10 rounded-2xl bg-white text-black font-bold opacity-60 transition-all hover:opacity-100" type="submit">Déconnexion</button>
                    </form>
                </nav>
            @endauth
            <h1 class="text-5xl font-bold">Manager vos abonnements comme si tout était en un !</h1>
            <button class="w-1/12 h-11 rounded-3xl bg-white text-black font-bold mt-12 transition-all hover:-translate-y-2 hover:cursor-pointer hover:bg-yellow-200"><a href="{{route("login")}}">Démarrer</a></button>
            <img src="{{ Vite::asset('resources/images/image.png') }}" alt="Illustration de l'application" class="w-2/3 rounded-3xl">
        </header>
    </body>
</html>
