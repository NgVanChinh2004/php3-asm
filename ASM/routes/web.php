<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LtController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TinController::class, 'index'])->name('home');
// Route::get('/news/{id}', [TinController::class, 'show'])->name('news.show');

Route::get('/contact', [TinController::class, 'contact'])->name('contact');
Route::get('/about', [TinController::class, 'about'])->name('about');
// Route::get('/shop', [TinController::class, 'shop'])->name('shop');

Route::get('/shop/{idLT}', [TinController::class, 'shopByCategory'])->name('shop.byCategory');

Route::get('/shopsingle/{id}', [TinController::class, 'shopsingle'])->name('shopsingle');

// hiển thị loại tin trong tin tức
// Route::get('/shop2', [LtController::class, 'create'])->name('shop2');
Route::get('/shop', [TinController::class, 'shop'])->name('shop');

Route::resource('comments', CommentController::class);






//          Route::get('/', [TinController::class, 'index']);
//          Route::get('/shop/{id}', [TinController::class, 'shop']);
//          Route::get('/shopsingle/{id}', [TinController::class, 'shopsingle'])->name('shopsingle.ig');
//          Route::prefix('client')
//                      -> as('client')
//                    -> middleware('auth')
//                    ->group( function() {

//                    });

// Route::prefix('admin')
//     ->as('admin.')
//     ->middleware(['auth'])
//     ->group(function () {


//         Route::prefix('categories')
//             ->as('categories.')
//             ->controller(CategoryController::class)
//             ->group(function () {
//                 Route::get('categories', 'index')->name('index');
//                 Route::get('categories/create', 'create')->name('create');
//                 Route::get('categories/{id}', 'show')->name('show');
//                 Route::post('categories/store', 'store')->name('store');
//             });

//         Route::prefix('products')
//             ->as('products.')
//             ->controller(CategoryController::class)
//             ->group(function () {
//                 Route::get('products', 'index')->name('index');
//                 Route::get('products/create', 'create')->name('create');
//                 Route::get('products/{id}', 'show')->name('show');
//                 Route::post('products/store', 'store')->name('store');
//             });
//     });

// Route::get('test/{category}', function (Category $category) {
//     return $category;
// });