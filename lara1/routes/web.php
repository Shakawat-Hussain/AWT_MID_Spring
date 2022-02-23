<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerone;

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
Route::get('/class2',function()
{
    return view('class2.homepage');
}
);
//route::get('/Ecom/View',function(){return view('Ecom.View.signin');});
route::get('/join',[controllerone::class,'login']);
