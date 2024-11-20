<nav class="w-full h-[120px] flex flex-row justify-start items-center gap-8 pl-8 text-black font-semibold bg-gradient-to-tl from-blue-300 to-green-500">
    <button class="bg-white rounded-xl w-1/12 h-10"><a href="{{route("home", ["titre" => "Subtrack - Home"])}}">Home</a></button>
    <form action="{{route("logout")}}" method="POST" class="w-1/12">
        @csrf
        <button type="submit" class="bg-red-400 text-white rounded-xl w-full h-10">Déconnexion</button>
    </form>
</nav>
