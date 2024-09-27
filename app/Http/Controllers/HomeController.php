<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // Data array yang berisi daftar buku
        $books = [
            ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005],
            ['title' => 'Cantik Itu Luka', 'author' => 'Eka Kurniawan', 'year' => 2002],
            ['title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017],
            ['title' => 'Tenggelamnya Kapal Van Der Wijck', 'author' => 'Abdul Malik Karim Amrullah(Buya Hamka)	', 'year' => 1935],
            ['title' => 'Ronggeng Dukuh Paruk', 'author' => 'Ahmad Tohari', 'year' => 1982],
        ];

        // Mengirim data buku ke view 'home'
        return view('home', ['books' => $books]);

}

public function form(Request $request){
    $dataMessage = $request->message;
}

    }
