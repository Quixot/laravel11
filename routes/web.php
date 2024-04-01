<?php
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/homepage', [HomepageController::class, 'homepage'])->name('homepage');