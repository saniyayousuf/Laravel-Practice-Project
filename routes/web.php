<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// // // // Adding new route


Route::get('/about', function(){
    return view ('/pages.about');
});



// // // Adding dynamic route 

// Route::get('/users/{id}', function ($id){
//     return 'This is User '.$id;
// });


// Route::get('/users/{id}/{name}', function ($id, $name){  
//     return 'This is User  '.$name. ' with an id of ' .$id;
// //  });
Route::get('/' , 'App\Http\Controllers\PagesController@index');
Route::get('/services' , 'App\Http\Controllers\PagesController@services');
Route::get('/about' , 'App\Http\Controllers\PagesController@about');

// CRUD ROUTES
Route::resource('posts','App\Http\Controllers\PostsController');


require __DIR__.'/auth.php';
