<?php


//use App\Http\Controllers\Api\v2\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Person;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::get('/person/{person}', [PersonController::class, 'show']);
//Route::resource('/person', PersonController::class);

Route::prefix('v1')->group(function () {
    Route::resource('/person', 'App\Http\Controllers\Api\v1\PersonController');
});

Route::prefix('v2')->group(function () {
    Route::resource('/person', 'App\Http\Controllers\Api\v2\PersonController');
});
