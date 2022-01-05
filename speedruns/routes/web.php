<?php

use App\Models\Game;
use App\Models\Records;
use Illuminate\Support\Facades\Route;

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
    $records = Records::all();

    return view('leaderboards', ['records' => $records]);
});

Route::get('/game/{id}', function (int $id) {
    $game = Game::find($id);

    return view('game', ['game' => $game]);
});
