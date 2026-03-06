<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
     public function view()
    {
        $user = Auth::user();
        $products = Product::all();


        return view('product.index', [
            "products" => $products,
            "username" => $user['name']
        ]);
    }

    public function create(){
        $user = Auth::user();
        return view('product.create', [
            "username" => $user['name']
        ]);
    }

     public function store(Request $request){
        // validasi input
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products_images', 'public');
            $validator['image'] = $imagePath;
        }

        $product = Product::create($validator);
            
        // simpan data portofolio
        // Portofolio::create($validated);

        return redirect()->route('product.index')->with('success', 'Berhasil menambahkan data produk!');
    }

    public function edit(Product $product){
        $user = Auth::user();
        return view('product.edit',[
            "username" => $user['name'],
            "product" => $product
        ]);
    }

    public function update(Request $request, Product $product){
        // validasi input
        $validator = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            if($product->image && Storage::disk('public')->exists($product->image)){
                // hapus gambar lama
                Storage::disk('public')->delete($product->image);
            }
            //    upload gambar baru
            $imagePath = $request->file('image')->store('products_images', 'public');
            $validator['image'] = $imagePath;
        }

        $product->update($validator);

        return redirect()->route('product.index')->with('success', 'Berhasil mengupdate data produk!');

    }

    public function destroy(Product $product){
        if($product->image && Storage::disk('public')->exists($product->image)){
            // hapus gambar lama
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Berhasil menghapus data produk!');
    }
}


