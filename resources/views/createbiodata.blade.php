<!-- perpanjangan dari master yang tidak berubah -->
@extends('master')
@section('content')

<div class="container">
    <form action="{{ route("biodata.store") }}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="masukkan nama" name="Nama" >
        </div>


        <div class="mb-3 mt-3 col-md-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="number" class="form-control " id="umur" placeholder="masukkan umur" name="Umur" >
        </div>


        <div class="mb-3 mt-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="masukkan alamat" name="Alamat" >
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
