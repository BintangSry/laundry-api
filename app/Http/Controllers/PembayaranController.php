<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return Pembayaran::all();
    }

    public function store(Request $request)
    {
        $pembayaran = Pembayaran::create($request->all());
        return response()->json($pembayaran, 200);
    }

    public function show(string $id)
    {
        return Pembayaran::find($id);
    }

    public function update(Request $request, string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->all());
        return response()->json($pembayaran);
    }

    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return response()->json(200);
    }
}
