<!-- perpanjangan dari master yang tidak berubah -->
@extends('master')
@section('content')


<div class="container mt-3">
<div class="row">
<div class="col-sm-8">

    @if (session()->has('success'))

    <div class="toast align-items-center text-white bg-primary border-0 md-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session()->get('success') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
      <br>
    @endif

  <a href="{{ route('obat.create') }}"  class="btn btn-primary">Buat Baru</a><br><br>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Obat</th>
        <th scope="col">Merk</th>
        <th scope="col">Suplier</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($obat as $item)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->Nama_Obat }}</td>
            <td>{{ $item->Merk }}</td>
            <td>{{ $item->Suplier }}</td>
            <td>
             <form onsubmit="return confirm('Apakah anda yakin menghapus data ini?');" action="{{ route('obat.delete', $item->id) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('obat.edit', $item->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">HAPUS </button>
                </form>
            </td>
        </tr>
        @endforeach


    </tbody>
  </table>

{{ $obat->links() }}

</div>

@endsection
