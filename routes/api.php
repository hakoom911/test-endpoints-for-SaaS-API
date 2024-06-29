<?php

use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/post-files-test', [TestingController::class, 'postFile'])->name('post-files-test');
Route::put('/put-files-test', [TestingController::class, 'putFileMethod'])->name('put-files-test');
