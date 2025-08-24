<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Constraint;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


// http verbs
// get, post, put/patch, delete, any, match 

// Route::get('/user', function () {
//     return 'User Access';
// });

// Route::post('/user', function (){
//     return 'User Created';
// });

// Route::match(['get', 'post'], '/user', function () {
//     return 'User Access';
// });

// Route::put('/user/{id}', function ($id) {
//     return "User with ID {$id} updated";
// });

// Route::patch('/user/{id}', function ($id) {
//     return "User with ID {$id} partially updated";
// });

// Route::delete('/user/{id}', function ($id) {
//     return "User with ID {$id} deleted";
// });

// Route::any('/anything', function() {
//     return 'Matched any HTTP method';
// });



// // Route parameter
// Route::get('/user/{id}', function ($id) {
//     return "User with ID {$id}";
// });


// // optional Route parameter
// Route::get('/user/{id?}', function ($id = null) {
//     return "User with ID {$id}";
// });


//multiple parameter
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "User with ID {$id} and Name {$name}";
// });



// // named parameter
// Route::get('/user/{id}', function ($id) {
//     return "User id {$id}";
// })->name('user.show');

// // grouping
// Route::prefix('admin')->group(function (){
//     Route::get('/dashboard', function (){
//         return 'Admin Dashboard';
//     });

//     Route::get('/settings', function (){
//         return 'Admin Settings';
//     });

// });

// // middleware
// Route::middleware(['auth'])->group(function (){
//     Route::get('/profile', function (){
//         return 'User Profile';
//     });

//     Route::get('/settings', function (){
//         return 'User Settings';
//     });
// });

// // combine 
// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function (){
//         return 'Admin Dashboard';
//     });

//     Route::get('/settings', function (){
//         return 'Admin Settings';
//     });
// });


// // Constraint 
// Route::get('/user/{id}', function ($id){
//     return "User with ID {$id}";
// })->where('id', '[0-9]+');

// Route::get('/post/{slug}', function ($slug){
//     return "Post with Slug {$slug}";
// })->where('slug', '[a-zA-Z0-9-]+');

// fallback
Route::fallback(function () {
    return view('errors.404');
});


