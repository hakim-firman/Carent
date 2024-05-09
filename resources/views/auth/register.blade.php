@extends('auth.templates.index')
@section('content')
    <form action="/register" method="post">
        @csrf
        <img class="mb-4" src="{{ asset('carent.png') }}" alt="" class="w-100" width="200px">
        <h1 class="h5 mb-3 fw-normal ">Daftarkan Dirimu Sekarang !</h1>
        <div class="form-floating py-1">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating py-1">

            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating py-1">
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
            <label for="alamat">Alamat</label>
        </div>
        <div class="form-floating py-1">
            <input type="text" class="form-control" name="no_telepon" id="No Telepon" placeholder="No Telepon" required>
            <label for="No Telepon">No Telepon</label>
        </div>
        <div class="form-floating py-1">
            <input type="text" class="form-control" name="sim" id="sim" placeholder="No SIM" required>
            <label for="sim">No SIM</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"required>
            <label for="floatingPassword">Password</label>
        </div>


        <button class="btn btn-danger w-100 py-2" type="submit">Daftar</button>
        <p class="mt-5 mb-3 text-body-secondary">Sudah punya akun? <a href="/login" class="link">Login</a></p>
    </form>
@endsection
