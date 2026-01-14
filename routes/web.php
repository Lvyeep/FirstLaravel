<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Ini buat tampilan web (View HTML)
Route::resource('/products', ProductController::class);

// Ini "Jalur Khusus" buat kamu tes POST di Postman (Return JSON)
Route::post('/test-post', function (Request $request) {
    $product = Product::create([
        'image'       => 'default.png', // sementara hardcode dulu buat tes
        'title'       => $request->title,
        'description' => $request->description,
        'price'       => $request->price,
        'stock'       => $request->stock
    ]);
    return response()->json($product);
});

Route::get('/', function () {
    return view('welcome');
});