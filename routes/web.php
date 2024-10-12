<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SekolahController;
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


Route::get("/create", [HomeController::class, "store"]);

Route::get("/create1", [HomeController::class, "store1"]);

Route::get("/create2", [HomeController::class, "store2"]);

Route::get("/create3", [HomeController::class, "store3"]);

Route::get("/show", [HomeController::class, "show"]);

Route::get('/product', [HomeController::class, 'show']);

Route::get('/product/{id}/edit', [HomeController::class, 'edit']);

Route::put('/product/{id}', [HomeController::class, 'update']);

Route::delete('/product/{id}', [HomeController::class, 'destroy']);

Route::get('/input', [HomeController::class, 'input']);

Route::post('/create', [HomeController::class, 'store']);

Route::get("/ktp",[RelasiController::class,"index"]);

Route::get('/pengguna/create', [RelasiController::class, 'create']);

Route::post('/pengguna/store', [RelasiController::class, 'store']);

Route::get("/school",[SchoolController::class,"index"]);

Route::get("/sekolah",[SekolahController::class,"index"]);
