<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Wechat;
use App\Http\Livewire\WebChat;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix'=>'channels/wechat', 
    'as'=>'channel.wechat.',
    ], function () {
        Route::get('/', Wechat::class)->name('weixin');
        Route::get('/webchat', WebChat::class)->name('webchat');
});