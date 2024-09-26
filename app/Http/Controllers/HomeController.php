<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = ["nama" => "suci nur sopyan"];
        return view("home", $data);
    }
}
