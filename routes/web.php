<?php

use App\Models\Bird;
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
    $trainer = \App\Models\Trainer::all()->first();
    if (!$trainer) {
        $trainer = new \App\Models\Trainer([
            'name' => 'Name'
        ]);
        $trainer->save();
    }

    return $trainer->birds;
});
