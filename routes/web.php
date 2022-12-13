<?php
use App\Http\Controllers\acceuilcontrollers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
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
Route::resource('acceuil',acceuilcontrollers::class);
Route::resource('connexion',ConnexionController::class);
Route::post('connexion', [ConnexionController::class,'traitement']);

