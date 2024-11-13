<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Fiche;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffichageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $genreid)
    {
        $data = Genre::with('categories')->get();
        $FicheParGenre = Genre::findOrFail($genreid)->fiches;
        // dd($FicheParGenre);
        return Inertia::render('Affichage/ParGenre', compact('FicheParGenre', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $categorieid)
    {
        $data = Genre::with('categories')->get();
        $FicheParCategorie = Fiche::where('categorie_id', '=', $categorieid)->with('category')->get();
        // dd($FicheParCategorie);
        return Inertia::render('Affichage/ParCategorie', compact('FicheParCategorie', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
