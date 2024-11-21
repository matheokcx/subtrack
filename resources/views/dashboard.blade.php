<x-dashboard-model :titre="$titre" :abonnements="$abonnements">
    <h2 class="text-2xl font-bold">Liste des abonnements</h2>
    @foreach($abonnements as $abonnement)
        <ul class="text-black">
            <li>{{$abonnement->id}}</li>
            <li>{{$abonnement->nom}}</li>
            <li>{{$abonnement->mensualite}}</li>
            <li>{{$abonnement->date_mensualite}}</li>
        </ul>
    @endforeach
</x-dashboard-model>
