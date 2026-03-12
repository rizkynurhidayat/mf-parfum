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

        public function create(){
            $user = Auth::user();
            return view('information.create', [
                "name" => $user['name']
            ]);
        }

        public function store(Request $request) {
    $validator = $request->validate([
        'phone' => 'required|string|max:255',
        'tiktok' => 'required|string|max:255',
        'twitter' => 'required|string|max:255',
        'instagram' => 'required|string|max:255',
        'location' => 'required|string|max:255',
    ]);

    Information::create($validator);
    return redirect()->route('information.index')->with('success', 'Berhasil Menambah Data');
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

    public function destroy(Information $information){
        $information->delete();
        return redirect()->route('information.index')->with('success', 'Berhasil Menghapus Data');
    }
}