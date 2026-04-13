<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahunApiController;
use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\VariabelApiController;
use App\Http\Controllers\DataApiController;
use App\Http\Controllers\InterpretasiApiController;
use App\Http\Controllers\VideoApiController;
use App\Http\Controllers\InstansiApiController;
use App\Http\Controllers\GsbpmApiController;
use App\Http\Controllers\SektoralApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/tahun',[TahunApiController::class,'index']);
Route::get('/variabel',[VariabelApiController::class,'index']);
Route::get('/kategori/{id}',[KategoriApiController::class,'show']);
Route::get('/kategori',[KategoriApiController::class,'index']);
Route::get('/strategis',[DataApiController::class,'index']);
Route::get('/strategis/{id}',[DataApiController::class,'shows']);
Route::get('/interpretasi',[InterpretasiApiController::class,'index']);
Route::get('/interpretasi/{id}',[InterpretasiApiController::class,'shows']);
Route::get('/video',[VideoApiController::class,'index']);
Route::get('/gsbpm',[GsbpmApiController::class,'index']);
Route::get('/sektoral/{id}',[SektoralApiController::class,'index']);
Route::get('/sektoral',[SektoralApiController::class,'show']);
Route::get('/sektorals',[SektoralApiController::class,'showing']);
Route::get('/intansi',[InstansiApiController::class,'show']);

