<?php

use App\Http\Livewire\CheckoutComponet;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponet;
use App\Http\Livewire\ShopComponet;
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
Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponet::class)->name('shop');
Route::get('/cart',CartComponet::class)->name('shop.cart');
Route::get('/checkout',CheckoutComponet::class)->name('shop.checkout');
