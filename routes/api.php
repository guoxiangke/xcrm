<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XbotCallbackController;
use App\Http\Controllers\WechatBotController;

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

Route::post('/xbot/callback/{token}', XbotCallbackController::class);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/wechat/send', [WechatBotController::class, 'send']);
    Route::post('/wechat/add', [WechatBotController::class, 'add']);
});