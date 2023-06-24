<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//query builder
//eloquent

class Pesanan extends Model
{
    use HasFactory;
    //memanggil table yang akan dikelola
    protected $table = 'pesanan';
    public $timestamps = false;
    //mendeklarasikan kolom yang ada didalam table
    protected $fillable = [
        'tanggal',
        'nama',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
    ];
    public function KategoriProduk(){
        return $this->belongsTo(KategoriProduk::class);
    }
    public function getAllData(){
        return DB::table('pesanan')
        ->join('kategori_produk','produk.kategori_produk_id','=','kategori_produk.id')
        ->select('pesanan.*','kategori_produk.nama as nama')
        ->get();
    }
}





