<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\IndexController;

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

Route::prefix('')
    ->namespace('\App\Http\Controllers\Frontend')
    ->middleware([
        // '',
    ])->group(function () {
    // Route::get('/', [IndexController::class, 'index']);
    // -----------------------------------------------------
    // Route::get('/', function () {
    //     return view('app');
    // });
    // Route::get('/', [IndexController::class, 'index']);
    // Route::get('/about', [IndexController::class, 'about']);
    // Route::get('/blog', [IndexController::class, 'blog']);
    // Route::get('/contact', [IndexController::class, 'contact']);
    // Route::get('/single_post', [IndexController::class, 'single_post']);

    // 因為vue無法顯示header，全部導向index
    // Route::get('/about', function(){
    //     return redirect("/");
    // });
    // Route::get('/blog', function(){
    //     return redirect("/");
    // });
    // Route::get('/contact', function(){
    //     return redirect("/");
    // });
    // Route::get('/single_post', function(){
    //     return redirect("/");
    // });

    // 用vue-router處理
    Route::get('/', [IndexController::class, 'app']);
    Route::get('/about', [IndexController::class, 'app']);
    Route::get('/blog', [IndexController::class, 'app']);
    Route::get('/contact', [IndexController::class, 'app']);
    Route::get('/single_post', [IndexController::class, 'app']);

});
