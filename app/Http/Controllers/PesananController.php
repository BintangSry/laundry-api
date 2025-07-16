<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        return Pesanan::all();
    }

    public function store(Request $request)
    {
        $pesanan = Pesanan::create($request->all());
        return response()->json($pesanan, 200);
    }

    public function show(string $id)
    {
        return Pesanan::find($id);
    }

    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->update($request->all());
        return response()->json($pesanan);
    }

    public function destroy(string $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return response()->json(200);
    }
}
