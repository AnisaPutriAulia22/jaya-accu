<?php

namespace App\Http\Controllers;
use App\Models\Validasi;

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
    public function show()
{
    $user = auth()->check() ? auth()->user()->name : 'Guest';

    $items = DB::table('validasi')
        ->where('user', $user)
        ->whereNull('pengiriman')
        ->get();

    $subtotal = $items->sum(function ($item) {
        return $item->harga * $item->yang_dibeli;
    });

    return view('user.detail-belanja', compact('items', 'subtotal'));
}


public function submitDetail(Request $request)
{
    $metode = $request->input('delivery_option');
    $alamat = $request->input('alamat');
    $email = $request->input('email');
    $telepon = $request->input('telepon');

    DB::table('validasi')
        ->where('user', auth()->check() ? auth()->user()->name : 'Guest')
        ->whereNull('pengiriman')
        ->update([
            'pengiriman' => $metode,
            'alamat' => $metode == 'delivery' ? $alamat : null,
            'email' => $metode == 'delivery' ? $email : null,
            'telepon' => $metode == 'delivery' ? $telepon : null,
            'updated_at' => now()
        ]);

    return redirect('/order'); // atau halaman sukses
}

    public function showOrder()
    {
   
        $order = DB::table('validasi')
            ->where('user', auth()->user()->name)
            ->latest()
            ->first();

        return view('user.order', compact('order'));
    }
    // public function cancelOrder()
    // {
    //     DB::table('validasi')
    //         ->where('user', auth()->user()->name)
    //         ->latest()
    //         ->limit(1)
    //         ->update(['status' => 'canceled_by_user']);

    //     return redirect('/order')->with('message', 'Pesanan berhasil dibatalkan.');
    // }
    public function cancel(Request $request)
    {
        $request->validate([
            'reason' => 'required|string',
        ]);

        $user = auth()->user();
        $order = DB::table('validasi')->where('user', $user->name)->latest()->first();

        if ($order) {
            DB::table('validasi')
                ->where('id', $order->id)
                ->update([
                    'status' => 'canceled_by_user',
                    'cancellation_reason' => $request->reason,
                ]);
        }

        return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan.');
    }
    public function restart($id)
{
    $data = Validasi::findOrFail($id);
    $data->status = 'finish'; // status direset ke awal
    $data->save();

    return redirect()->back()->with('success', 'Status pesanan telah direset ke awal proses.');
}



}
