<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB;


class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategori_produk.index', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Kategori_Produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $KategoriProduk = new KategoriProduk();
        $KategoriProduk->id = $request->i;
        $KategoriProduk->nama = $request->nama;
        $KategoriProduk->save();
        return redirect('KategoriProduk');
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
    public function edit(KategoriProduk $kategori_produk)
    {
        return view('admin/kategori_produk/edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProduk $kategori_produk)
    {
        // fungsi update di sin
        $kategori_produk = KategoriProduk ::find($request->id);
        return redirect('admin/kategori_produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(string $id)
    {
        $kategori_produk = KategoriProduk::find($id);
        $kategori_produk->delete(); //delete from kategori_produk where id=1
        return redirect('/kategori_produk');
    }

}
