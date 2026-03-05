<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Information;

class HomeController extends Controller
{   
    public function view()
    {
        $heros = Hero::all();
        $informations = Information::all();

        return view('index', [
            "hero" => $hero,
            "information" => $information,
        ]);
        
    }
}