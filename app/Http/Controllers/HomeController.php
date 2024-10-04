<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {

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

    public function form(Request $request)
    {
        $dataMessage = $request->message;
    }

    public function store(Request $request)
    {

        $validator = validator::make($request->all(), [
            'nama' => 'required|string|max:225',
            'stok' => 'required|integer|min:50',
            'harga' => 'required|numeric|min:2',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new product();
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect()->back();
    }

    public function show()
    {
        $Product = Product::Paginate(4);
        return view('tableProduct', ['Product' => $Product]);
    }

    public function edit($id)
    {

        $Product =  product::findOrFail($id);

        return view("editProduct", compact("Product"));
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

    public function input()
    {
        return view("inputProduct");
    }
}
