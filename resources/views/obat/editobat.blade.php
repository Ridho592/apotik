<!-- perpanjangan dari master yang tidak berubah -->
@extends('master')
@section('content')

<div class="container">
    <form action="{{ route("obat.update", $obat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
        <label for="nama obat" class="form-label">Nama Obat</label>
        <input type="text" class="form-control" id="nama obat" placeholder="masukkan nama obat" name="nama_obat" value="{{ $obat->Nama_Obat }}">
        </div>


        <div class="mb-3 mt-3 col-md-3">
          <label for="merk" class="form-label">Merk</label>
          <input type="text" class="form-control " id="merk" placeholder="masukkan merk" name="Merk" value="{{ $obat->Merk }}">
        </div>


        <div class="mb-3 mt-3">
            <label for="suplier" class="form-label">Suplier</label>
            <input type="text" class="form-control" id="suplier" placeholder="masukkan suplier" name="Suplier" value="{{ $obat->Suplier }}">
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
