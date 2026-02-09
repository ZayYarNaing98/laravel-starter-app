<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

// Static Route
Route::get('/blogs', function() {
    return "Hello, This is Bolog Page.";
});

// DynamicRoute
Route::get('/blogs/{id}', function($id) {
    return "This is blog details " . $id;
});

// Naming Route
Route::get('/dashboard', function() {
    return "Welcome to TPP Dashboard Page.";
})->name('dashboard.tpp');


// Redirect Route
Route::get('/tpp', function() {
    return redirect()->route('dashboard.tpp');
});

// Group Route
Route::prefix('backend')->group(function() {
    Route::get('/users', function() {
        return "This is User Page.";
    });

    Route::get('/settings', function() {
        return "This is Settings Page.";
    });

    Route::get('/students', function() {
        return redirect()->route('dashboard.tpp');
    });
});


// Laravel View
// Route::get('/articles', function() {
//     return view('articles.index');
// });

// Laravel Controller
Route::get('/articles', [ArticleController::class, 'index']);
