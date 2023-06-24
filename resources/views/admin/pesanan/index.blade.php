@extends('admin.layout.appadmin')
@section('content')

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>

    <div class="card mb-4">
        <div class="card-header">
            <!-- <i class="fas fa-table me-1"></i> -->
            <a class="btn btn-success" href="{{ url('pesanan/create') }}">Create Pesanan</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table">
                <thead>
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
                    @foreach ($pesanan as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat_pemesan }}</td>
                            <td>{{ $p->no_hp }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->jumlah_pesanan }}</td>
                            <td>{{ $p->deskripsi }}</td>
                            <td>{{ $p->produk_id }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('/pesanan/view/' . $p->id) }}">View</a>
                                <a class="btn btn-primary" href="">Edit</a>
                                <a class="btn btn-primary" href="{{ url('/pesanan/delete/' . $p->id) }}"
                                    onclick="if(!confirm('Anda Yakin Hapus Data Pesanan ?')) {return false}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
