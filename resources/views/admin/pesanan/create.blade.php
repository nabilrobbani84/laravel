@extends('admin.layout.appadmin')
@section('content')




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
<h1 >Form Input Pesanan</h1>
<div class="col-8 ">
<form method="POST" action="{{url('pesanan/store')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="text" name="tanggal" type="date" class="form-control" value="{{ date('Y-m-d')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text2" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Alamat Pemesan</label> 
    <div class="col-8">
      <textarea id="text3" name="alamat_pemesan" type="text" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">NO HP</label> 
    <div class="col-8">
      <input id="text4" name="no_hp" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text4" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Jumlah Pesanan</label> 
    <div class="col-8">
      <input id="text4" name="jumlah_pesanan" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="text4" name="deskripsi" type="text" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Produk ID</label> 
    <div class="col-8">
      <select name="produk_id" id="produk_id">

        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>

      </select>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>
@endsection
