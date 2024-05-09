@extends('templates.index')
@section('content')
    @can('pelanggan')
    <h3>Pesan Mobil Anda Sekarang, Mulai Petualangan Besok!</h3>
    <form action="/cars" method="post">
        @csrf

        <div class="row g-2 mb-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="date" class="form-control" id="merek" name="merek" placeholder="Tanggal Mulai"
                        value=""required>
                    <label for="merek">Tangal Mulai</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="date" class="form-control" id="Model" name="model" placeholder="Tanggal Selesai"
                        value=""required>
                    <label for="Model">Tanggal Selesai</label>
                </div>
            </div>
            <button href="/cars/create" class=" col-1 btn btn-danger">Cari</button>
        </div>


    </form>
    @endcan

@endsection
