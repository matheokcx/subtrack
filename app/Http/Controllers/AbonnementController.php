<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbonnementController extends Controller {

    use HasFactory;

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $id = Auth::user()->id;
        $abonnements = Abonnement::query()->where('id_user', $id);
        return view('dashboard', ["titre" => "Subtrack - Home", "abonnements" => $abonnements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){

    }

}
