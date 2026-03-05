<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HomeController extends Controller
{   
    public function view()
    {
        $heros = Hero::all();

        return view('index', [
            "hero" => $hero,
        ]);
        
    }
}