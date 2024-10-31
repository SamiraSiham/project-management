<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class GenreController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $data = Genre::all();
        return Inertia::render( 'Genres/Index', compact( 'data' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return Inertia::render( 'Genres/Create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $rules = [ 'genre' => [ 'required', 'string', 'max:255', 'unique:genres' ] ];
        $errors = [ 'genre.required' => 'this field is required',
        'genre.string' => 'this field must be a string',
        'genre.max' => 'this field must not exceed 255 characters',
        'genre.unique' => 'this genre already exists', ];

        $validator = Validator::make( $request, $rules, $errors );

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
        return Inertia::render( 'Genres/Edit' );
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
