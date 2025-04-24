<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index(){
        // Ambil kategori unik dari kolom 'filter'
        $kategoris = Product::select('kategori')->distinct()->pluck('kategori');

    
        $products = Product::all();

  
        return view('user.home', compact('kategoris', 'products'));
    }
}
