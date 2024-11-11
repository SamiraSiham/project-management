<?php

use Inertia\Inertia;
use App\Models\Fiche;
use App\Models\Genre;
use App\Models\Archive;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
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
use App\Http\Controllers\AffichageController;
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
        'alert' => [
                    'title' => 'Success!',
                    'text' => 'This is a success message.',
                    'icon' => 'success',
                    // 'confirmButtonText' => 'Awesome'
                    ]
    ]
);
})->name('/');

// Route::get('/downloadVerified/{id}', [DownloadController::class, 'downloadVerified'])->name('downloadVerified');
Route::resource('download', DownloadController::class);

Route::get('/about', function () {
    $data = Genre::with('categories')->get();
    return Inertia::render('AboutUs', compact('data'));
})->name('about');

Route::get('/contact', function(){
    $data = Genre::with('categories')->get();
    return Inertia::render('ContactUs', compact('data'));
})->name('contact');

Route::middleware('auth')->group(function(){
    Route::resource('genres', GenreController::class);
    Route::resource('categories', CategorieController::class);
    Route::resource('fiches', FicheController::class);
});

Route::get('/dashboard', function () {
    $archives = Archive::with('fiche')->latest()->paginate(5);
    $count_users = DB::table('users')->count();
    $count_permissions = DB::table('permissions')->count();
    $count_categorie = DB::table('categorie')->count();
    $count_fiches = DB::table('fiches')->count();
    // $fiches_categories = Fiche::with(['category' => function($query){
    //     $query->with('genre');
    // }])->get();
    $courses = Fiche::with(['category', function($query){
        $query->whereHas('category.genre', function($q){
            $q->where('genre', '=' , 'Courses');
        });
    }])->count();
    $tools = Fiche::with(['category', function($query){
        $query->whereHas('category.genre', function($q){
            $q->where('genre', '=' , 'Tools');
        });
    }])->count();
    $research = Fiche::with(['category', function($query){
        $query->whereHas('category.genre', function($q){
            $q->where('genre', '=' , 'Research');
        });
    }])->count();
    $statistics = [
        'users' => $count_users, 
        'permissions' => $count_permissions, 
        'categories' => $count_categorie, 
        'fiches' => $count_fiches, 
    ];
    return Inertia::render('Dashboard', compact('archives', 'statistics', 'courses', 'tools', 'research'));   
})->middleware('auth', 'verified')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('permission', PermissionController::class)->names(['index' => 'Permissions']);
    Route::resource('role', RoleController::class);
    Route::resource('user',UserController::class);
});

Route::resource('affichage', AffichageController::class);

require __DIR__.'/auth.php';
