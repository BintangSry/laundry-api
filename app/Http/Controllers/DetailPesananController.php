<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetailPesanan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail = DetailPesanan::create($request->all());
        return response()->json($detail, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DetailPesanan::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detail = DetailPesanan::find($id);
        $detail->update($request->all());
        return response()->json($detail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = DetailPesanan::find($id);
        $detail->delete();
        return response()->json(200);
    }
}
