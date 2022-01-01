<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\XbotController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CALLBACK
// address 传当前windows机器的ip，一般是内网ip+端口，但是要暴露出来
// api/xbot/callback/ip%3Aport
    // https://winscp.net/eng/docs/session_url
    // $address = base64_encode('127.0.0.1:123');
Route::post('/xbot/callback/{address}', [XbotController::class, 'callback']);

