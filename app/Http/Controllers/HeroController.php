<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function view (){  
        $user = Auth::user();
        $heros = Hero::all();

        return view('hero.index', [
            "heros" => $heros,
            "name" => $user['name']
        ]);
    }

    public function create (){
        $user = Auth::user();
        return view('hero.create', [
            "name" =>$user['name']
        ]);
    }

    public function store (Request $request){
        $validator = $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('hero_images', 'public');
            $validator['image'] = $imagePath;
        }

        $hero = Hero::create($validator);

        return redirect()->route('hero.index')->with('success', 'Berhasil Menambahkan Data !');
    }

    public function edit (Hero $hero){
        $user = Auth::user();
        return view('hero.edit', [
            "name" => $user['name'],
            "hero" => $hero,
        ]);
    }

    public function update (Request $request, Hero $hero){
        $validator = $request->validate([
            'image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('image')){
            if($hero->image && Storage::disk('public')->exists($hero->image)){
                Storage::disk('public')->delete($hero->image);
            }
            $imagePath = $request->file('image')->store('hero_image', 'public');
            $validator['image'] = $imagePath;
        }

        $hero->update($validator);
        return redirect()->route('hero.index')->with('success', 'Berhasil Mengubah Data');
    }

    public function destroy(Hero $hero){
        if($hero->image && Storage::disk('public')->exists($hero->image)){
            Storage::disk('public')->delete($hero->image);
        }
        $hero->delete();
        return redirect()->route('hero.index')->with('success', 'Berhasil Menghapus Data');
    }
}