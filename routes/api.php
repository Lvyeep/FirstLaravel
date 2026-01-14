<?php

use Illuminate\Support\Facades\Route;

//import controller ProductController
use App\Http\Controllers\Api\ProductController;

//products
Route::apiResource('/product', ProductController::class);
//tambahkan s pada product diatas jika ingin memakai postman