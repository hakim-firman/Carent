@extends('auth.templates.index')
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

<form action="/login" method="post">

    @csrf
    <img class="mb-4" src="{{asset('carent.png')}}" alt="" class="w-100" width="200px">
    <h1 class="h3 mb-3 fw-normal ">Selamat Datang</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"required>
      <label for="floatingPassword">Password</label>
    </div>


    <button class="btn btn-danger w-100 py-2" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-body-secondary">Belum punya akun? <a href="/register" class="link">Daftar</a></p>
  </form>
@endsection
