
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
 <div class="card mt-5">
<div class="card-body">
<h3 class="text-center">Form Pemeriksaan Kesehatan</h3><br/>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif <br/>
 <!-- form validasi -->
 <form action="{{ url('hasil') }}" method="POST">
{{ csrf_field() }}

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar-o"></i>
          </div>
        </div> 
        <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir_usia" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tgl_lahir_usia" name="tgl_lahir_usia" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Pria"> 
        <label for="radio_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Wanita"> 
        <label for="radio_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Tes</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="jenis_tes" id="jenis_tes_0" type="checkbox" class="custom-control-input" value="Tekanan_Darah"> 
          <label for="jenis_tes_0" class="custom-control-label">Tekanan Darah</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="jenis_tes" id="jenis_tes_1" type="checkbox" class="custom-control-input" value="Kolesterol"> 
          <label for="jenis_tes_1" class="custom-control-label">Kolesterol</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="jenis_tes" id="jenis_tes_2" type="checkbox" class="custom-control-input" value="Asam_Urat"> 
          <label for="jenis_tes_2" class="custom-control-label">Asam Urat</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="jenis_tes" id="jenis_tes_3" type="checkbox" class="custom-control-input" value="Gula_Darah"> 
          <label for="jenis_tes_3" class="custom-control-label">Gula Darah</label>
        </div>
      </div>
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<h3>Hasil Pemeriksaan Normal</h3>
        <table>
            <tr>
                <th>Jenis Tes</th>
                <th>Hasil</th>
                <th>Normal</th>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td>120/80 mmHg</td>
                <td></td>
            </tr>
            <tr>
                <td>Asam Urat</td>
                <td>Pria: &lt; 7 mg/dL<br>Wanita: &lt; 6 mg/dL</td>
                <td></td>
            </tr>
            <tr>
                <td>Kolesterol Total</td>
                <td>&lt; 200 mg/dL</td>
                <td></td>
            </tr>
            <tr>
                <td>Gula Darah</td>
                <td>Puasa: 70-110 mg/dL<br>2 Jam setelah makan: 100-150 mg/dL<br>Sewaktu/acak: 70-125 mg/dL</td>
                <td></td>
            </tr>
        </table><br>