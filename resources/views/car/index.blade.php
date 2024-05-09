@extends('templates.index')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
  </div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger" role="alert">
  {{session('error')}}
  </div>
@endif
<div class="d-flex justify-content-between align-items-center ">

    <h1>Daftar Mobil</h1>
    <div>
        <a  href="/cars/create" class="btn btn-danger">Tambah Data</a>
    </div>
</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Merek</th>
        <th scope="col">Model</th>
        <th scope="col">Nomor Polisi</th>
        <th scope="col">Tarif/hari</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($cars as $car)
        <tr>

        <th scope="row">1</th>

        <td>{{$car->merek}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->nomor_polisi}}</td>
        <td>{{$car->tarif}}</td>
        <td>  <a  href="/cars/{{$car->id}}/edit" class="btn btn-warning">Edit</a> </td>
        @endforeach
      </tr>

    </tbody>
  </table>
@endsection
