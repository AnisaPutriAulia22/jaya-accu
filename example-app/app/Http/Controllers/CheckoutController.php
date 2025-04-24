<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        $cartItems = $request->input('cart');

        foreach ($cartItems as $item) {
            DB::table('validasi')->insert([
                'user' => auth()->check() ? auth()->user()->name : 'Guest',
                'product' => $item['name'],
                'yang_dibeli' => $item['quantity'],
                'foto' => $item['image'],
                'harga' => $item['price'],
                'status' => 'shipped',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return response()->json(['status' => 'success']);
    }
    public function showOrder()
    {
   
        $order = DB::table('validasi')
            ->where('user', auth()->user()->name)
            ->latest()
            ->first();

        return view('user.order', compact('order'));
    }
    public function cancelOrder()
    {
        DB::table('validasi')
            ->where('user', auth()->user()->name)
            ->latest()
            ->limit(1)
            ->update(['status' => 'canceled_by_user']);

        return redirect('/order')->with('message', 'Pesanan berhasil dibatalkan.');
    }

}
