<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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

//Halaman Utama
Route::get('/', [HomeController::class, 'home']);

// Halaman Product
Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-games', [ProductsController::class, 'product1']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'product2']);
    Route::get('/riri-story-books', [ProductsController::class, 'product3']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'product4']);
});

// Halaman News
Route::get('news/{judul?}', [NewsController::class, 'news']);

// Halaman Program
Route::prefix('program')->group(function() {
        Route::get('/karir', [ProgramController::class, 'program1']);
        Route::get('/magang', [ProgramController::class, 'program2']);
        Route::get('/kunjungan-industri', [ProgramController::class, 'program3']);
});

// Halaman About Us
Route::get('/about-us', [AboutUSController::class, 'about']);

// Halaman Contact us
Route::resource('/contact-us', ContactUsController::class, [
    'only' => ['index', 'create', 'store']
]);
