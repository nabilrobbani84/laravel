@extends('admin.layout.appadmin')
@section('content')

@if (Auth::user()->role !== 'pelanggan')
<h1>selamat datang di produk</h1>

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        @if (Auth::user()->role == 'admin')
        <a class="btn btn-success" href="{{url('produk/create')}}">Create Produk</a>
        @endif
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Min Stok</th>
                    <th>Deskripsi</th>
                    <th>Kategori Produk id</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat Pemesan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Deskripsi</th>
                    <th>Produk ID</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($produk as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$p->kode}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->harga_jual}}</td>
                        <td>{{$p->harga_beli}}</td>
                        <td>{{$p->stok}}</td>
                        <td>{{$p->min_stok}}</td>
                        <td>{{$p->deskripsi}}</td>
                        <td>{{$p->kategori_produk_id}}</td>
                        <td></td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('produk/view/' . $p->id) }}">View</a>
                            <a class="btn btn-primary" href="{{ url('produk/edit' . $p->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ url('/produk/delete' . $p->id) }}"
                                onclick="if(!confirm('Anda Yakin Hapus Data Produk ?')) {return false}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
@else

@include ('admin.access_denied')
@endif
@endsection