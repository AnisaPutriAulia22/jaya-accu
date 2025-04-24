<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ValidasiController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('validasi')->latest()->get();

        return view('admin.validasi', ['data' => $data]);
    }
    public function updateStatus($id, $status)
    {
        DB::table('validasi')
            ->where('id', $id)
            ->update(['status' => $status]);

        return back()->with('message', 'Status pesanan diperbarui.');
    }

}
