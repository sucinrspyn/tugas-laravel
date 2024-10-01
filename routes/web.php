<?php

use App\Http\Controllers\HomeController;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/form', 'form');

Route::post('/submit', function (Request $request) {
    $nama = $request->input('nama');
    $message = $request->input('message');

    return redirect('/home')->with([
        'nama' => $nama,
        'message' => $message
    ]);
});

Route::get('/home', function () {
    return view('home');
});


Route::get("/create",[HomeController::class,"store"]);

Route::get("/show", [HomeController::class, "show"]);


