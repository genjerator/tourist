<?php

use App\Http\Controllers\Api\ChallengeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$files = glob(__DIR__ . "/api/*.php");
foreach ($files as $file) {
    require($file);
}
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(
    ['middleware' => ['auth:sanctum']],
    function () {
        Route::put('/challenge/{challenge}', [ChallengeController::class, 'update'])->name('challenge.update');
        Route::get('/challenge/{challenge}', [ChallengeController::class, 'show'])->name('challenge.show');
    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('challenges', [ChallengeController::class, 'index']);
Route::get('latest-active-round', [ChallengeController::class, 'latestActiveRoute']);

Route::post('login', [LoginController::class, ' store']);
Route::post('logout', [LoginController::class, 'destroy']);
Route::post('register', [RegisteredUserController::class, 'store']);
