<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
Route::get('/', function () {
    $products = Product::all();
    return view('home', ['products' => $products]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart-promo', function () {
    return view('cart-promo');
});
Route::get('/create-profile', function () {
    return view('create-profile');
});
