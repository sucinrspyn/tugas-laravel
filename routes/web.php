<?php

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
