<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Information;
use App\Models\Product;
class HomeController extends Controller
{   
   public function view(Request $request)
{
    $heros = Hero::all();
    $informations = Information::all();
    $kategori = $request->query('kategori'); // Gunakan query() untuk mengambil data dari URL

    if ($kategori == 'termurah') {
        $products = Product::orderBy('price', 'asc')->get();
    } 
    elseif ($kategori == 'terlaris') {
        // Pastikan kolom 'count' ada di database Anda
        $products = Product::orderBy('count', 'desc')->get();
    } 
elseif ($kategori == 'terbaru') {
    // Gunakan created_at (standar Laravel) bukan created
    $products = Product::orderBy('created_at', 'desc')->get();
}
    else {
        // Default jika tidak ada kategori yang dipilih (misal: terbaru)
        $products = Product::orderBy('created_at', 'desc')->get();
    }

    return view('index', [
        "heros" => $heros,
        "products" => $products,
        "information" => $informations,
    ]);
}
}

