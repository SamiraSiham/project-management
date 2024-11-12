<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Fiche;
use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        //
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        $file_id = session()->get( 'file_id' );
        $file_path = session()->get( 'file_path' );
        return Inertia::render( 'Verification/VerifyEmail', compact( 'file_id', 'file_path' ) );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        // dd( $request );
        if ( !isset( $request->file_id ) || !isset( $request->file_path ) ) {
            abort( 404 );
        } else {
            $fiche = Fiche::findOrFail( $request->file_id );
            $fiche_path = $request->file_path;
            $url = public_path( '/storage/'.$fiche_path );
            $archive = Archive::create( [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'fiche_id' => $request->file_id,
                'download_date' => Carbon::now()->format( 'Y-m-d' )
            ] );
            // dd( response()->file( $url ) );
            session()->flash('alert', [
                'title' => 'Thank you!',
                // 'text' => 'Your data has been saved successfully.',
                'html' => "<a href=$request->file_id/edit class='text-blue-500 hover:underline'>Download your file</a>",
                'icon' => 'success'
            ]);
        }
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        $user = Auth::user();
        $fiche = Fiche::findOrFail( $id )->file_path;
        if ( isset( $user ) ) {
            $file = Fiche::findOrFail( $id );
            $url = public_path( '/storage/'.$fiche );
            $archive = Archive::create( [
                'first_name' => Auth::user()->first_name,
                'last_name' => Auth::user()->last_name,
                'email' => Auth::user()->email,
                'fiche_id' => $file->id,
                'download_date' => Carbon::now()->format( 'Y-m-d' )
            ] );
            return response()->download( $url );
        } else {
            return to_route( 'download.create' )->with( [ 'file_id' => $id, 'file_path' => $fiche ] );
        }
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( $id ) {
        // dd($id);
        $fiche_path = Fiche::findOrFail( $id )->file_path;
        $url = public_path( 'storage/'.$fiche_path );
        return response()->download( $url );
        // dd( $url );
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
