<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Fiche;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class FicheController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $data = Fiche::with( 'category' )->get();
        // return response()->json( [ 'data' => $data ] );
        return Inertia::render( 'Fiches/Index', compact( 'data' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        $categories = Categorie::all();
        // return response()->json( [ 'categories' => $categories ] );
        return Inertia::render( 'Fiches/Create', compact( 'categories' ) );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        try {
            $request->validate( [
                'title' => 'required',
                'author' => 'required',
                'price' => 'required',
                'categorie_id' => 'required',
                'date_publication' => 'required',
                'file_path' => 'required',
            ], [
                'title.required' => 'this field is required',
                'author.required' => 'this field is required',
                'price.required' => 'this field is required',
                'categorie_id.required' => 'this field is required',
                'date_publication.required' => 'this field is required',
                'file_path.required' => 'this field is required'
            ] );
            if ( $request->hasFile( 'file_path' ) ) {
                $path = $request->file( 'file_path' )->store( 'fiches', 'public' );
                $fiche = Fiche::create( [
                    'title' => $request->title,
                    'author' => $request->author,
                    'price' => $request->price,
                    'categorie_id' => $request->categorie_id,
                    'date_publication' => $request->date_publication,
                    'file_path' => $path,
                ] );
                return to_route( 'fiches.index' );
            }
        } catch ( ValidationException $e ) {
            return response()->json( [ 'errors' => $e->errors() ], 422 );
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        $fiche = Fiche::findOrFail( $id )->file_path;
        // $url = Storage::url( $fiche );
        // // $content = Storage::get($fiche);
        // // dd( $url );
        // return redirect($url);
        if (!Storage::disk('public')->exists($fiche)) {
            abort(404); // Return a 404 error if the file does not exist
        }else{
            $path = Storage::disk('public')->path($fiche);
            return Response::file($path);
            // dd($path);
        }
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        $fiche = Fiche::findOrFail( $id );
        $categories = Categorie::all();
        return Inertia::render( 'Fiches/Edit' , compact( 'fiche' , 'categories' ));
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        $fiche = Fiche::findOrFail($id);
        // dd($request->all());
        try {
            $validatedData = $request->validate( [
                'title' => 'required',
                'author' => 'required',
                'price' => 'required',
                'categorie_id' => 'required',
                'date_publication' => 'required',
                'file_path' => 'nullable|file|max:2048'
            ], [
                'title.required' => 'this field is required',
                'author.required' => 'this field is required',
                'price.required' => 'this field is required',
                'categorie_id.required' => 'this field is required',
                'date_publication.required' => 'this field is required',
                'file_path.max' => 'this file is too large'
            ] );
            if ($request->hasFile('file_path')) {
                $oldFile = $fiche->file_path;
                Storage::delete($oldFile);
                $filePath = $request->file('file_path')->store('fiches', 'public'); 
                $validatedData['file_path'] = $filePath; 
                $fiche->update([
                    'title' => $request->title,
                    'author' => $request->author,
                    'price' => $request->price,
                    'categorie_id' => $request->categorie_id,
                    'date_publication' => $request->date_publication,
                    'file_path' => $filePath,
                ]);
                return to_route( 'fiches.index' );
            }
            $fiche->update([
                'title' => $request->title,
                'author' => $request->author,
                'price' => $request->price,
                'categorie_id' => $request->categorie_id,
                'date_publication' => $request->date_publication,
            ]);
            return to_route( 'fiches.index' );
            // dd($validatedData);
            
        } catch( ValidationException $e ) {
            return response()->json( [ 'errors' => $e->errors() ], 422 );
        }
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        $fiche = Fiche::findOrFail($id);
        $fiche->delete();
        return to_route('fiches.index');
    }
}
