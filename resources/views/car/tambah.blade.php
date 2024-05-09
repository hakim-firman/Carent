@extends('templates.index')
@section('content')
<h1>Tambah Data</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item "><a href="/cars" class="">Mobile</a></li>
      <li class="breadcrumb-item " aria-current="page">Tambah</li>
    </ol>
  </nav>
  <form action="/cars" method="post">
    @csrf

<div class="row g-2 mb-2">
    <div class="col-md">
      <div class="form-floating">
        <input type="text" class="form-control" id="merek" name="merek" placeholder="Merek Mobil" value=""required>
        <label for="merek">Merek Mobil</label>
      </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control" id="Model" name="model" placeholder="Model" value=""required>
            <label for="Model">Model</label>
          </div>
    </div>
  </div>
<div class="row g-2 mb-4">
    <div class="col-md">
      <div class="form-floating">
        <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="No Polisi" value=""required>
        <label for="No Polisi">No Polisi</label>
      </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <input type="number" class="form-control" id="tarif" name="tarif" placeholder="Tarif / hari" value="" required>
            <label for="tarif">Tarif / hari</label>
          </div>
    </div>
  </div>
  <button href="/cars/create" class="btn btn-danger">Simpan</button>
</form>
@endsection
