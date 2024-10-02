<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function store(){
        $Product = new Product();
        $Product->nama = "Laptop";
        $Product->harga = 10000;
        $Product->stok = 10;
        $Product->deskripsi ="laptop murah";
        $Product->save();

        return ('data sukses dikirim');

}

    public function store1()
    {
        $Product = new Product();
        $Product->nama = "HandPhone";
        $Product->harga = 50000;
        $Product->stok = 30;
        $Product->deskripsi = "HP murah";
        $Product->save();

        return ('data sukses dikirim');
    }

    public function store2()
    {
        $Product = new Product();
        $Product->nama = "Komputer";
        $Product->harga = 20000;
        $Product->stok = 15;
        $Product->deskripsi = "Komputer murah";
        $Product->save();

        return ('data sukses dikirim');
    }

    public function store3()
    {
        $Product = new Product();
        $Product->nama = "Televisi";
        $Product->harga = 40000;
        $Product->stok = 25;
        $Product->deskripsi = "TV murah";
        $Product->save();

        return ('data sukses dikirim');
    }

    public function show()
    {
        $Product = Product::all();
        return view("tableProduct", ['Product' => $Product]);
    }

    public function edit($id)
    {
        $Product = Product::findOrFail($id);

        return view("editProduct",compact("Product"));
    }

    public function update(Request $request, $id)
    {

        $Product = Product::findOrFail($id);
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();
        return redirect('/show');

    }

    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect('/show');
    }
        }


