<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Providers\AuthServiceProvider;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pages.auth.auth-login');




});





Route::middleware(['auth'])->group(function () {

    Route::get('/captcha-refresh', [CaptchaController::class, 'refresh']);
    Route::get('home', function () {

        return view('pages.dashboard');
    })->name('home');

    

    

    Route:: resource ('user',UserController::class);
    Route:: resource ('product',\App\Http\Controllers\ProductController::class);

    Route::get('products/export/excel', 'App\Http\Controllers\ProductController@export')->name('products.export');
   
   
    
    // Route::get('products/export/excel', [ProductController::class, 'export_excel']);
    
});



