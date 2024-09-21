<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\travel_wisata;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\api\articles;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


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
    return view('welcome');
});






Route::get('Nusa-Travel/Welcome-Travel', function () {return view('Trevel Landing Page.welcome-travel');})->name('welcome.nusa-travel');

 

 Route::get('Nusa-Travel', [travel_wisata::class, 'showCombinedData'])->name('index-travel.nusa-travel');
 Route::get('Nusa-Travel/About', function () {return view('Trevel Landing Page.about');})->name('about.nusa-travel');
 Route::get('Nusa-Travel/Package',[travel_wisata::class,'showAllData'])->name('package.nusa-travel');
 Route::get('Nusa-Travel/Detail/{nama_tempat}', [travel_wisata::class, 'showByName']);
 Route::get('Nusa-Travel/Article/{title}', [articles::class, 'showByName']);
 Route::get('Nusa-Travel/Notification', function () {return view('emails.notification');})->name('notification');
 Route::post('/subscribers', [App\Http\Controllers\api\subscribers::class, 'store'])->name('subscribers.store');



// Route::get('/produk/diskon', [products::class, 'tampilProdukDiskon'])->name('products.diskon');
// Route::post('/products/search', [Products::class, 'searchProducts'])->name('products.search');
// Route::get('produk/nama/{nama}', [products::class, 'showByName']);
// Route::get('lobi',[products::class,'showData'])->name('products.showData');
// Route::get('produkAll',[products::class,'showAllData'])->name('products.showAllData');
// Route::get('produkKategori',[products::class,'KategoriData'])->name('products.KategoriData');
