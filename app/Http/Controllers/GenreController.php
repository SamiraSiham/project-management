<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class GenreController extends Controller implements HasMiddleware {
    /**
    * Display a listing of the resource.
    */
    public static function middleware(): array 
    {
        return [
            new Middleware('permission:Create Genre',only:['create']),
            new Middleware('permission:Read Genre',only:['index']),
            new Middleware('permission:Update Genre',only:['edit']),
            new Middleware('permission:Delete Genre',only:['destroy']),
        ];
    }
    public function index() {
        $data = Genre::all();
        return Inertia::render( 'Genres/Index', compact( 'data' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        // return Inertia::render( 'Genres/Create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        try {
            $request->validate( [
                'genre' => 'required|max:255'
            ], [
                'genre.required' => 'this field is required',
                'genre.max' => 'this field must not exceed 255 characters',
            ] );
            $genre = Genre::create( [
                'genre' => $request->genre
            ] );
            return to_route( 'genres.index' );
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
        $genre = Genre::findOrFail( $id );
        return Inertia::render( 'Genres/Edit', compact( 'genre' ) );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        $genre = Genre::findOrFail( $id );
        try {
            $request->validate( [
                'genre' => 'required|max:255'
            ], [
                'genre.required' => 'this field is required',
                'genre.max' => 'this field must not exceed 255 characters',
            ] );
            $genre->update( [
                'genre' => $request->genre
            ] );
            return to_route( 'genres.index' );
        } catch ( ValidationException $e ) {
            return response()->json( [ 'errors' => $e->errors() ], 422 );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        $genre = Genre::findOrFail( $id );
        $genre->delete();
        return to_route( 'genres.index' );
    }
}
