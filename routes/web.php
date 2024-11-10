<?php

use Inertia\Inertia;
use App\Models\Fiche;
use App\Models\Genre;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PermissionController;


Route::get('/', function () {
    $data = Genre::with('categories')->get();
    $fiches = Fiche::with('category')->get();
    return Inertia::render('Welcome',
    [
        'fiches' => $fiches,
        'data' => $data,
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]
);
})->name('/');

// Route::get('/downloadVerified/{id}', [DownloadController::class, 'downloadVerified'])->name('downloadVerified');
Route::resource('download', DownloadController::class);
Route::get('about', function () {
    return Inertia::render('AboutUs');
})->name('about');

Route::get('/contact', function(){
    return Inertia::render('ContactUs');
})->name('contact');

Route::middleware('auth')->group(function(){
    Route::resource('genres', GenreController::class);
    Route::resource('categories', CategorieController::class);
    Route::resource('fiches', FicheController::class);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('permission',PermissionController::class)->names(['index'=>'Permissions']);
    Route::resource('role',RoleController::class);
    Route::resource('user',UserController::class);
});

require __DIR__.'/auth.php';
