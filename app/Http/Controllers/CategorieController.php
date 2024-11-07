<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Genre;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $data = Categorie::with('genre')->get();
        return Inertia::render( 'Categories/Index', compact( 'data' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        $genres = Genre::all();
        return Inertia::render( 'Categories/Create' , compact('genres') );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        // dd($request->all());
        try {
            $request->validate( [
                'nom_categorie' => 'required',
                'genre_id' => 'required',
            ], [
                'nom_categorie.required' => 'this field is required',
                'genre_id.required' => 'this field is required',
            ] );
            $categorie = Categorie::create( [
                'nom_categorie' => $request->nom_categorie,
                'genre_id' => $request->genre_id
            ] );
            return to_route( 'categories.index' );
        } catch ( ValidationException $e ) {
            return response()->json( [ 'errors' => $e->errors() ], 422 );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        $categorie = Categorie::findOrFail($id);
        $genres = Genre::all();
        return Inertia::render( 'Categories/Edit' , compact('categorie', 'genres') );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        $cat = Categorie::findOrFail( $id );
        try {
            $request->validate( [
                'nom_categorie' => 'required',
                'genre_id' => 'required',
            ], [
                'nom_categorie.required' => 'this field is required',
                'genre_id.required' => 'this field is required',
            ] );
            $cat->update( [
                'nom_categorie' => $request->nom_categorie,
                'genre_id' => $request->genre_id
            ] );
            return to_route( 'categories.index' );
        } catch ( ValidationException $e ) {
            return response()->json( [ 'errors' => $e->errors() ], 422 );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        $c = Categorie::findOrFail( $id );
        $c->delete();
        return to_route('categories.index');
    }
}
