<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PermissionController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('/');

Route::get('about', function () {
    return Inertia::render('AboutUs');
})->name('about');

Route::get('/contact', function(){
    return Inertia::render('ContactUs');
})->name('contact');

// Route::get('/list', function(){
//     return Inertia::render('List');
// })->name('list');

// Route::get('/add-fiche', function(){
//     return Inertia::render('addfiche');
// })->name('add-fiche');


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
