<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tymon\JWTAuth\Facades\JWTFactory;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/login', function(Request $request) {
//     $credentials = $request->only('email', 'password');
//     if (!$token = auth()->attempt($credentials)) {
//         return response()->json(['error' => 'Unauthorized'], 401);  
//     } else {
//         return response()->json([
//             'data'=>[
//                 'token' => $token,
//                 'expires_in' => JWTFactory::getTTL() * 60,

//             ]
//         ]);
//     }
// });


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('api/register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');