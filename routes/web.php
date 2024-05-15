<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $productos = [
        ['nombre' => 'producto 1 posillo estampado', 'precio' => 15000],
        ['nombre' => 'producto 2 llaveros personalizados','precio' => 10000],
        ['nombre' => 'producto 3 camisetas estampadas','precio' => 25000],
        ['nombre' => 'producto 4 almohadas con logos', 'precio'=> 35000],
        ['nombre' => 'producto 5 gorras con estampado', 'precio'=> 30000],
    ];
    $nombre= "HECTOR CONTRERAS RUIZ";
    return view('welcome', ['productos' => $productos], ['nombre' => $nombre]);
});

//Route::view('/contacto', 'contacto');
