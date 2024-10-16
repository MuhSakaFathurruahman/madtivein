<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\editProduksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('produkKami');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/editProduks', function () {
//     return view('edit_produks');
// });

// Route::resource('login', loginController::class);
// Route::resource('register', registerController::class);
Route::resource('editProduks', editProduksController::class);