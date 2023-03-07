<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('/',[HomeController::class, 'index'])->name('homepage.index');

// Route::get('/', function () {
//     return view('index');
// });

//Routing and Response
// Route::get('/response-sample', function () {
//     return response('<h1>This is sample of response</h1>');
// });

//wildcard
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// });

//wildcard w/ constraint
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// })->where('id','[0-9]+');

//Request & Query Parameters
// Route::get('/search', function (Request $request) {
//     // ddd($request);
//     // dd($request);
//     return ($request->name.' '.$request->pet);
// });

//Basic View and Passing of Data
// Route::get('/products', function () {
//     return view('index',[
//         'title'     =>  'Products',
//         'heading'   =>  'Coffee',
//         'coffee'    =>  [[
//             'id'        =>  '1',
//             'flavor'    =>  'Hazelnut',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ],
//         [
//             'id'        =>  '2',
//             'flavor'    =>  'Iced Americano',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ]
//     ]]);
// });




// Route::resource('admin/products', ProductController::class);

// // Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
// //     Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
// // });
//     Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.homepage.index');
//     Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
//     Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
//     Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
//     Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
//     Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
//     Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

