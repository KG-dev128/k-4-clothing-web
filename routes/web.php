<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class,'Index'] );
Route::get("contact", [HomeController::class,'Contact'] );
Route::get("detail", [HomeController::class,'Detail'] );
Route::get("checkout", [HomeController::class,'Checkout'] );
Route::get("cart", [HomeController::class,'Cart'] );
Route::get("shop", [HomeController::class,'Shop'] );

//Category routing
Route::get("catIndex", [CategoryController ::class,'Index'] )->name('category.index');
Route::get("catCreate", [CategoryController ::class,'Create'] );
Route::post("catSave", [CategoryController ::class,'Save'] );


Route::resource('product',ProductController::class);
Route::post('/proSave', [ProductController::class, 'store']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
