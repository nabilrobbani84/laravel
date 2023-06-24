@extends('admin.layout.appadmin')
@section('content')
    <h1>Data Pesanan ID: #{{ $pesanan->id }}</h1>
    <table class="table table-striped mt-4">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $pesanan->id }}</td>
            </tr>
            <tr>
                <td>Kode Produk</td>
                <td>{{ $pesanan->tanggal  }}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $pesanan->nama }}</td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>{{ $pesanan->alamat_pemesan }}</td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>{{ $pesanan->no_hp }}</td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>{{ $pesanan->email }}</td>
            </tr>
            <tr>
                <td>Min Stok</td>
                <td>{{ $pesanan->jumlah_pesanan}}</td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>{{ $pesanan->deskripsi }}</td>
            </tr>
            <tr>
                <td>Kategori pesanan ID</td>
                <td>{{ $pesanan->pesanan_id }}</td>
            </tr>
        </tbody>
    </table>
@endsection