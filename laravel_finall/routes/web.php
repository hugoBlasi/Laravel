<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [ProductController::class, 'index'])->middleware(['auth'])->name('products.index');
Route::get('/boutique\{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/form', [ProductController::class, 'admin'])->name('form');
Route::get('/panier', [ProductController::class, 'cart'])->name('panier');
Route::post('/form', [ProductController::class, 'create'])->name('form.create');


Route::get('/supre/{id}', function ($slug) {
    $products = Product::find($slug);
    $products->forceDelete();
    return redirect()->route('products.index');
})->name('supre');
