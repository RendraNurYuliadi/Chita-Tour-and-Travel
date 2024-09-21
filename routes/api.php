<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\api\users;
use App\Http\Controllers\api\travel_place;
use App\Http\Controllers\api\travel_wisata;
use App\Http\Controllers\api\articles;


use App\Http\Controllers\api\products;
use App\Http\Controllers\api\members;
use App\Http\Controllers\api\pay_members;
use App\Http\Controllers\api\logs;
use App\Http\Controllers\api\transactions;
use App\Http\Controllers\api\messages;
/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('auth/register', [Authcontroller::class, 'register'])->name('register');
Route::post('auth/login', [Authcontroller::class, 'login'])->name('login');


Route::middleware(['auth:sanctum'])->group(function () { 





//-------------------------------------------------------------- Ini Crud FashionHub ----------------------------------------------------------------------

//crud user
Route::resource('users', users::class); 
//crud wisata example
Route::resource('travels', travel_place::class); 
//crud wisata
Route::resource('wisata_travels', travel_wisata::class); 
//Add Activity
Route::resource('logs-resource', logs::class); 
//Add Article
Route::resource('Article-resource', articles::class); 





//Add transaction
Route::resource('transactions-resource', transactions::class); 
//crud produk
Route::resource('produk-resource', products::class);
// update stok 
Route::put('produk-resource/{id}/update-stok', [products::class, 'update_Stok']);
// update status 
Route::put('produk-resource/{id}/update-status', [products::class, 'update_Status']);
// truncate produk
Route::delete('truncate-produk', [products::class, 'truncateProduk']);
// Pencarian Scan Buat Barcode Produk
Route::get('product/search/{id}', [transactions::class,'searchByBarcodeProduk'])->name('search1');
// Pencarian Scan Buat Barcode Member
Route::get('members/search/{id}', [transactions::class,'searchByBarcodeMember'])->name('search2');


//crud member
Route::resource('member-resource', members::class);
//crud pay_member
Route::resource('pay-member-resource', pay_members::class);
//Add message
Route::resource('message-resource', messages::class); 
//truncate tbl_member 
//Route::delete('member-resource/truncate', [members::class, 'truncate']);

//-------------------------------------------------------------- Ini Crud FashionHub ----------------------------------------------------------------------






Route::get('auth/me', [Authcontroller::class, 'me'])->name('me');
Route::post('auth/logout', [Authcontroller::class, 'logout'])->name('logout');

    });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
