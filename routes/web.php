<?php

use Illuminate\Support\Facades\Route;
use App\Models\category;

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
	$category =category::with('children.children.children.children.children')->root()->get();
    return view('welcome',[
     'categories'=>$category
    ]);
});
