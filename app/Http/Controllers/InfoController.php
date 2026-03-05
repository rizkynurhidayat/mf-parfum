<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function view (){  
        $user = Auth::user();
        $informations = Information::all();

        return view('information.index', [
            "informations" => $informations,
            "name" => $user['name']
        ]);
    }

    public function edit (Information $information){
        $user = Auth::user();
        return view('information.edit', [
            "name" => $user['name'],
            "information" => $information,
        ]);
    }

    public function update (Request $request, Information $information){
        $validator = $request->validate([
            'phone' => 'required|string|max:255',
            'tiktok' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $information->update($validator);
        return redirect()->route('information.index')->with('success', 'Berhasil Mengubah Data');
    }
}