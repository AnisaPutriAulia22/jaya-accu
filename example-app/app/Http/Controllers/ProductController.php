<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Mengambil semua data produk
    $products = Product::all();

    // Mengirim data produk ke view 'products.index'

    return view('admin.product', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'namaProduk' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'fotoProduct' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('fotoProduct')) {
            $imageName = Str::random(10) . '.' . $request->file('fotoProduct')->getClientOriginalExtension();
            $request->file('fotoProduct')->storeAs('public/products', $imageName);
        }
    
        Product::create([
            'product' => $request->namaProduk,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'foto' => $imageName ?? null,
        
        ]);
    
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'namaProduk' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'stock' => 'required|integer',
            'harga' => 'required|integer',
            'fotoProduct' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $product = Product::findOrFail($id);
    
        // Cek apakah ada file foto baru yang diupload
        if ($request->hasFile('fotoProduct')) {
            // Hapus foto lama jika ada
            if ($product->foto) {
                Storage::delete('public/products/' . $product->foto);
            }
    
            // Simpan foto baru
            $imageName = Str::random(10) . '.' . $request->file('fotoProduct')->getClientOriginalExtension();
            $request->file('fotoProduct')->storeAs('public/products', $imageName);
            $product->foto = $imageName;
        }
    
        // Update data produk
        $product->product = $request->namaProduk;
        $product->kategori = $request->kategori;
        $product->deskripsi = $request->deskripsi;
        $product->stock = $request->stock;
        $product->harga = $request->harga;
    
        $product->save();
    
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari produk berdasarkan ID
    $product = Product::findOrFail($id);

    // Hapus foto jika ada
    if ($product->foto) {
        Storage::delete('public/products/' . $product->foto);
    }

    // Hapus produk
    $product->delete();

    return redirect()->route('products.index');
    }
}
