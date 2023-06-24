<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//query builder
//eloquent

class KategoriProduk extends Model
{
    use HasFactory;
    //memanggil table yang akan dikelola
    protected $table = 'Kategori_Produk';
    public $timestamps = false;
    //mendeklarasikan kolom yang ada didalam table
    protected $fillable = [
        'id',
        'nama',
    ];
    public function KategoriProduk(){
        return $this->belongsTo(KategoriProduk::class);
    }
    public function getAllData(){
        return DB::table('Kategori_Produk')
        ->join('kategori_produk','produk.kategori_produk_id','=','kategori_produk.id')
        ->select('KategoriProduk.*','kategori_produk.nama as nama')
        ->get();
    }
}
