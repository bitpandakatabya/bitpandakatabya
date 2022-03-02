<?php

use App\Http\Controllers\TransactionController;
use App\Interfaces\TransactionInterface;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;

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

Route::get('/transactions', function (ServerRequestInterface $request, TransactionInterface $transactionInterface) {
    return (new TransactionController($request))->service($transactionInterface, $request);
});
