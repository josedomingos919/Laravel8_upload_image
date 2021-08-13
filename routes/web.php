<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'teste']);

Route::get('c/', function () { 
    return view('upload');
});

Route::get('a/', function () {
   return view("home",['nome'=>"José"]);
});

Route::any('produto/{nome}', function ($nome) {
    return "Produto: $nome";
}); 