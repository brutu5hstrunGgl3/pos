<?php
use App\Http\Middleware\User;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Staff;
use Mews\Captcha\CaptchaController;
use Illuminate\Support\Facades\Route;
use App\Providers\AuthServiceProvider;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

    //permision khusus admin
    Route::middleware(Admin::class)->group(function () {
        Route::resource('user', UserController::class);

        //contoh url admin http://127.0.0.1:8000/admin/..................
        Route::prefix('admin')->group(function () {

        });
    });

    //permision khusus user
    Route::middleware(User::class)->group(function () {

         //contoh url user http://127.0.0.1:8000/user/..................
         Route::prefix('user')->group(function () {

         });
    });

    //permision khusus staft
    Route::middleware(Staff::class)->group(function () {

        //contoh url staff http://127.0.0.1:8000/staff/..................
        Route::prefix('staff')->group(function () {

        });
    });


    //contoh permision khusus staft dan user
    Route::withoutMiddleware([Staff::class, User::class])->group(function () {

    });

    Route::resource('product', ProductController::class);

    Route::get('products/export/excel', 'App\Http\Controllers\ProductController@export')->name('products.export');

    // Route::get('products/export/excel', [ProductController::class, 'export_excel']);
});
