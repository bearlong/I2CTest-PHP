<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// GET /products：返回所有產品的列表。
Route::get('/products', [ProductController::class, 'show']);

// POST /products：新增一個產品。
Route::post('/products',  [ProductController::class, 'add']);

// DELETE /products/{id}：根據產品 id 刪除產品。
Route::DELETE('/products/{id}',  [ProductController::class, 'delete']);
