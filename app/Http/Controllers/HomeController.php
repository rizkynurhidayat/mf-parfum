<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Information;
use App\Models\Product;
class HomeController extends Controller
{   
    public function view()
    {
        $heros = Hero::all();
        $products = Product::all();
        $informations = Information::all();

        return view('index', [
            "heros" => $heros,
            "products" => $products,
            "information" => $informations,
        ]);
        
    }
}