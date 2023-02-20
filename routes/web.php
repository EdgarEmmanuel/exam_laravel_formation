<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ HomeController, TypeController, ReferentielController , FormationController};

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


Route::get('/', [HomeController::class, 'Home']);


Route::get('/types', [HomeController::class, 'PageType']);
Route::get('/referentiels', [HomeController::class, 'PageReferentiel']);
Route::get('/formations', [HomeController::class, 'PageFormation']);







Route::post("/register_type", [TypeController::class, "createOneType"]);
Route::post("/register_referentiel", [ReferentielController::class, "createOneReferentiel"]);
Route::post("/register_formation", [FormationController::class, "createOneFormation"]);
