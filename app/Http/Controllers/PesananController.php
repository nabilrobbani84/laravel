<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Produk;
use App\Models\Pesanan;
use App\Http\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kategori_produk = KategoriProduk::all();

        // $produk = DB::table('produk')
        //     ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
        //     ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        //     ->get();
        $pesanan = DB::table('pesanan')
            ->select('pesanan.*')
            ->get();
        return view('admin.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            // $Pesanan = Pesanan::all();
            $kategori_produk = DB::table('kategori_produk')->get();
            $pesanan = DB::table('pesanan')->get(); //ini mengguakan eloquent
    
            return view ('admin.pesanan.create', compact('kategori_produk','pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
        // $pesanan = new Pesanan;
        // $pesanan->id = $request->id;
        // $pesanan->tanggal = $request->tanggal;
        // $pesanan->nama = $request->nama;
        // $pesanan->alamat_pemesan = $request->alamat_pemesan;
        // $pesanan->no_hp = $request->no_hp;
        // $pesanan->email = $request->email;
        // $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        // $pesanan->deskripsi = $request->deskripsi;
        // $pesanan->produk_id = $request->produk_id;
        // $pesanan->save();
        

        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'alamat_pemesan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jumlah_pesanan' => 'required',
            'deskripsi' => 'required',
            'produk_id' => 'required',
        ]);
        Pesanan::create($validatedData);

        return redirect('pesanan');
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
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact(
            'produk',
            'kategori_produk'
        ));
    }
    public function delete(string $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete(); //delete from pesanan where id=1
        return redirect('/pesanan');
    }

    public function view($id)
    {
        //
        $pesanan = Pesanan::find($id); //select * from pesanan where id=1
        return view('admin.pesanan.view', ['pesanan' => $pesanan]);
    }

}