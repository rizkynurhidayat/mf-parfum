<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function view (){  
        $user = Auth::user();
        $galleries = Gallery::all();

        return view('gallery.index', [
            "galleries" => $galleries,
            "name" => $user['name']
        ]);
    }

    public function create (){
        $user = Auth::user();
        return view('gallery.create', [
            "name" =>$user['name']
        ]);
    }

    public function store (Request $request){
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('gallery_images', 'public');
            $validator['image'] = $imagePath;
        }

        $gallery = Gallery::create($validator);

        return redirect()->route('gallery.index')->with('success', 'Berhasil Menambahkan Data !');
    }

    public function edit (Gallery $gallery){
        $user = Auth::user();
        return view('gallery.edit', [
            "name" => $user['name'],
            "gallery" => $gallery,
        ]);
    }

    public function update (Request $request, Gallery $gallery){
        $validator = $request->validate([
             'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('image')){
            if($gallery->image && Storage::disk('public')->exists($gallery->image)){
                Storage::disk('public')->delete($gallery->image);
            }
            $imagePath = $request->file('image')->store('gallery_images', 'public');
            $validator['image'] = $imagePath;
        }

        $gallery->update($validator);
        return redirect()->route('gallery.index')->with('success', 'Berhasil Mengubah Data');
    }

    public function destroy(Gallery $gallery){
        if($gallery->image && Storage::disk('public')->exists($gallery->image)){
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Berhasil Menghapus Data');
    }
}