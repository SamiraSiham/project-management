<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Genre;
use App\Models\Categorie;
use Illuminate\Http\Request;

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
        //
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
        return Inertia::render( 'Categories/Edit' );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }
}
